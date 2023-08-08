<?php

namespace App\Http\Controllers\Api;

use App\Exports\ExamineesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateExamineeRequest;
use App\Http\Requests\UpdateExamineeRequest;
use App\Http\Requests\UpdateExamRequest;
use App\Http\Resources\ExamineeExamsResource;
use App\Http\Resources\ExamineeResource;
use App\Http\Resources\ReportResource;
use App\Models\Examinee;
use App\Queries\ExamineesQuery;
use App\Services\ReportsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

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
            'admin.id as admin_id',
            'examinees.gender',
            'examinees.created_at',
            'examinees.updated_at',
        );
        return response()->json($query->paginate());
    }

    public function get($id)
    {
        $examinee = Examinee::findOrFail($id);

        return response()->json(new ExamineeResource($examinee));
    }

    public function exams(Request $request, $id)
    {
        $examinee = Examinee::findOrFail($id);
        return response()->json(new ExamineeExamsResource($examinee));
    }

    public function create(CreateExamineeRequest $request)
    {
        if (!$this->reportService->canUserCreateReport($request->user())) {
            throw new AccessDeniedHttpException('number_of_reports_exceeded');
        }

        // $report = $this->reportService->createEmptyReport();

        $admin = $request->user();
        $admin->update(['used_reports' => DB::raw('used_reports + 1')]);

        $data = $request->all();
        $data['admin_id'] = $admin->id;
        $data['created_by'] = $admin->id;
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

    public function saveExam($id, $type, UpdateExamRequest $request)
    {
        $examinee = Examinee::findOrFail($id);

        $report = $this->reportService->updateReport($examinee, $type, $request);

        return response()->json($report);
    }
}
