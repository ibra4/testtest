<?php

namespace App\Http\Controllers\Api;

use App\Exports\LeiterRecordsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeiterRecordRequest;
use App\Http\Requests\UpdateLeiterRecordRequest;
use App\Models\LeiterRecord;
use App\Queries\LeiterRecordsQuery;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LeiterRecordsController extends Controller
{
    /**
     * leiterRecordsQuery
     *
     * @var LeiterRecordsQuery
     */
    protected $leiterRecordsQuery;

    public function __construct(LeiterRecordsQuery $lrbq)
    {
        $this->leiterRecordsQuery = $lrbq;
    }

    public function getByType(Request $request, $type)
    {
        $query = LeiterRecord::select('id', 'min_age', 'max_age', 'scaled_score', 'value')
            ->where(['type' => $type])
            ->orderBy('scaled_score', 'ASC')
            ->orderBy('value', 'ASC');

        if ($request->min_age && $request->min_age != '') {
            $query->where('min_age', (int)$request->min_age);
        }

        if ($request->max_age && $request->max_age != '') {
            $query->where('max_age', (int)$request->max_age);
        }

        if ($request->scaled_score && $request->scaled_score != '') {
            $query->where('scaled_score', (int)$request->scaled_score);
        }

        if ($request->value && $request->value != '') {
            $query->where('value', (int)$request->value);
        }

        if ($request->has('sort')) {
            $query->orderBy($request->sort[0], $request->sort[1]);
        }

        return response()->json($query->paginate());
    }

    public function get($id)
    {
        return LeiterRecord::findOrFail($id);
    }

    public function test()
    {
        $record = LeiterRecord::select(
            '*',
            DB::raw("ABS(min_age - 70) AS minage"),
            DB::raw("ABS(max_age - 70) AS maxage"),
        )
            ->where(['type' => 'attention'])
            ->where('min_age', '<=', 70)
            ->where('max_age', '>=', 70)
            ->limit(1)
            ->get();
    }

    public function update(UpdateLeiterRecordRequest $request, $id)
    {
        $record = LeiterRecord::findOrFail($id);
        $record->update($request->all());

        return response()->json($record);
    }

    public function create(CreateLeiterRecordRequest $request)
    {
        $record = LeiterRecord::create($request->all());

        return response()->json($record);
    }

    public function export(Request $request, $type)
    {
        return Excel::download(new LeiterRecordsExport($request, $this->leiterRecordsQuery, $type), "leiter-records-$request->type.xlsx");
    }
}
