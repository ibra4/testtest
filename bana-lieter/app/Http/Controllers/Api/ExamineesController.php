<?php

namespace App\Http\Controllers\Api;

use App\Exports\ExamineesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateExamineeRequest;
use App\Http\Requests\UpdateExamineeRequest;
use App\Http\Resources\ExamineeResource;
use App\Http\Resources\ReportResource;
use App\Models\Examinee;
use App\Queries\ExamineesQuery;
use App\Services\ReportsService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExamineesController extends Controller
{
    /**
     * @var ExamineesQuery
     */
    protected $examineesQuery;

    /**
     * @var ReportsService
     */
    protected $reportService;

    public function __construct(ExamineesQuery $exq, ReportsService $reportService)
    {
        $this->examineesQuery = $exq;
        $this->reportService = $reportService;
    }

    public function index(Request $request)
    {
        $query = $this->examineesQuery->get($request);
        $query->select(
            'examinees.id',
            'examinees.name',
            'examinees.birthday as age',
            'admin.name as adminname',
            'examinees.gender',
            'creator.name as createdbyadminname',
            'examinees.created_at',
            'examinees.updated_at',
            'examinees.report_id',
        );
        return response()->json($query->paginate());
    }

    public function get($id)
    {
        $examinee = Examinee::findOrFail($id);

        return response()->json(new ExamineeResource($examinee));
    }

    public function create(CreateExamineeRequest $request)
    {
        $report = $this->reportService->createEmptyReport();
        $data = $request->all();
        $data['report_id'] = $report->id;
        $examinee = Examinee::create($data);

        return response()->json($examinee);
    }

    public function update(UpdateExamineeRequest $request, $id)
    {
        $examinee = Examinee::findOrFail($id);
        $examinee->update($request->all());

        return response()->json($examinee);
    }

    public function export(Request $request)
    {
        return Excel::download(new ExamineesExport($request, $this->examineesQuery), 'examinees.xlsx');
    }

    public function getExam($id)
    {
        $examinee = Examinee::findOrFail($id);
        return response()->json(new ReportResource($examinee->report));
    }

    public function saveExam($id, $type, Request $request)
    {
        $examinee = Examinee::findOrFail($id);
        $report = $this->reportService->updateReport($examinee, $type, $request);

        return response()->json($report);
    }
}
