<?php

namespace App\Http\Controllers\Api;

use App\Exports\ExamineesExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateExamineeRequest;
use App\Http\Requests\UpdateExamineeRequest;
use App\Http\Requests\UpdateLeiterExamRequest;
use App\Http\Resources\ExamineeExamsResource;
use App\Http\Resources\ExamineeResource;
use App\Http\Resources\ReportResource;
use App\Models\Examinee;
use App\Models\Reports\LeiterReport;
use App\Queries\ExamineesQuery;
use App\Services\ReportsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;
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
            'admin.id as admin_id',
            'examinees.gender',
            'examinees.created_at',
            'examinees.updated_at',
            'examinees.created_by',
        );
        return $this->sendSuccessReponse($query->paginate());
    }

    public function get($id)
    {
        $examinee = Examinee::findOrFail($id);

        return $this->sendSuccessReponse(new ExamineeResource($examinee));
    }

    /**
     * @new
     */
    public function actionExams($id)
    {
        $examinee = Examinee::findOrFail($id);
        if (!Gate::allows('view-examinee', $examinee)) {
            return $this->sendErrorMessage(__("You don't have permission to view this examinee"), 403, 'replace');
        }
        return $this->sendSuccessReponse(new ExamineeExamsResource($examinee));
    }

    public function create(CreateExamineeRequest $request)
    {
        $user = $request->user();

        if ($user->hasRole('admin')) {
            $centerId = $user->id;
        } else {
            $centerId = $user->admin->id;
        }

        $data = $request->all();
        $data['admin_id'] = $centerId;
        $data['created_by'] = $user->id;
        $examinee = Examinee::create($data);

        return $this->sendSuccessReponse($examinee);
    }

    public function update(UpdateExamineeRequest $request, $id)
    {
        $examinee = Examinee::findOrFail($id);
        $examinee->update($request->all());

        return $this->sendSuccessReponse($examinee);
    }

    public function export(Request $request)
    {
        return Excel::download(new ExamineesExport($request, $this->examineesQuery), 'examinees.xlsx');
    }

    /**
     * @deprecated
     */
    public function getExam($id)
    {
        $examinee = Examinee::findOrFail($id);
        return $this->sendSuccessReponse(new ReportResource($examinee->report));
    }

    public function saveExam($id, $type, UpdateLeiterExamRequest $request)
    {
        $report = LeiterReport::findOrFail($id);

        $report = $this->reportService->updateReport($report, $type, $request);

        return $this->sendSuccessReponse($report);
    }
}
