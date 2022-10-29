<?php

namespace App\Http\Controllers\Api;

use App\Exports\ExamineesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateExamineeRequest;
use App\Http\Requests\UpdateExamineeRequest;
use App\Http\Resources\ExamineeResource;
use App\Models\Examinee;
use App\Queries\ExamineesQuery;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExamineesController extends Controller
{
    /**
     * examineesQuery
     *
     * @var ExamineesQuery
     */
    protected $examineesQuery;

    public function __construct(ExamineesQuery $exq)
    {
        $this->examineesQuery = $exq;
    }

    public function index(Request $request)
    {
        return response()->json($this->examineesQuery->get($request)->paginate());
    }

    public function get($id)
    {
        $examinee = Examinee::findOrFail($id);

        return response()->json(new ExamineeResource($examinee));
    }

    public function create(CreateExamineeRequest $request)
    {
        $user = Examinee::create($request->all());

        return response()->json($user);
    }

    public function update(UpdateExamineeRequest $request, $id)
    {
        $user = Examinee::findOrFail($id);
        $user->update($request->all());

        return response()->json($user);
    }

    public function export(Request $request)
    {
        return Excel::download(new ExamineesExport($request, $this->examineesQuery), 'examinees.xlsx');
    }
}
