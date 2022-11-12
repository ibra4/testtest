<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeiterRecordRequest;
use App\Http\Requests\UpdateLeiterRecordRequest;
use App\Models\LeiterRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LeiterRecordsController extends Controller
{
    public function getByType(Request $request, $type)
    {
        $records = LeiterRecord::where(['type' => $type])
            ->orderBy('scaled_score', 'ASC')
            ->orderBy('value', 'ASC');

        if ($request->min_age && $request->min_age != '') {
            $records->where('min_age', (int)$request->min_age);
        }

        if ($request->max_age && $request->max_age != '') {
            $records->where('max_age', (int)$request->max_age);
        }

        if ($request->scaled_score && $request->scaled_score != '') {
            $records->where('scaled_score', (int)$request->scaled_score);
        }

        if ($request->value && $request->value != '') {
            $records->where('value', (int)$request->value);
        }

        return response()->json($records->paginate());
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
}