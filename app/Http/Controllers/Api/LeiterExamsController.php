<?php

namespace App\Http\Controllers\Api;

use App\Exports\LeiterReportsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeiterExamRequest;
use App\Http\Requests\UpdateLeiterExamRequest;
use App\Http\Resources\LeiterReportResource;
use App\Models\Examinee;
use App\Models\Reports\LeiterReport;
use App\Models\User;
use App\Queries\LeiterReportsQuery;
use App\Services\ReportsService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class LeiterExamsController  extends Controller
{
    /**
     * @var LeiterReportsQuery
     */
    protected $leiterReportsQuery;

    /**
     * @var ReportsService
     */
    protected $reportService;

    public function __construct(
        LeiterReportsQuery $leiterReportsQuery,
        ReportsService $reportService
    ) {
        $this->leiterReportsQuery = $leiterReportsQuery;
        $this->reportService = $reportService;
    }

    /**
     * @param Request $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionIndex(Request $request)
    {
        $query = $this->leiterReportsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    /**
     * @param string $id
     *   Report id
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionGet($id)
    {
        $report = LeiterReport::findOrFail($id);
        if (!Gate::allows('view-report', $report)) {
            return $this->sendErrorMessage(__("You don't have permission to view this report"), 403, 'replace');
        }
        return $this->sendSuccessReponse(new LeiterReportResource($report));
    }

    /**
     * @param string $id
     *   Report id
     * @param string $type
     *   Leiter sub report
     * @param UpdateLeiterExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionUpdate($id, $type, UpdateLeiterExamRequest $request)
    {
        $report = LeiterReport::findOrFail($id);

        $report = $this->reportService->updateReport($report, $type, $request);

        return $this->sendSuccessReponse($report);
    }

    /**
     * @param string $id
     *   Examinee id
     * @param UpdateLeiterExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionCreate($id, CreateLeiterExamRequest $request)
    {
        if (!$this->reportService->canUserCreateReport($request->user())) {
            return $this->sendErrorMessage('You have exceeded the allowed reports number, please contact website administrator', 403);
        }

        $examinee = Examinee::findOrFail($id);
        $birthday = new Carbon($examinee->birthday);
        $applicationDate = new Carbon($request->application_date);

        $diff = $birthday->diff($applicationDate);

        $years = $diff->format("%y");
        $months = $diff->format("%m");

        $ageInMonths = $years * 12 + $months;

        if ($ageInMonths < 36) {
            return response()->json([
                'errors' => [
                    'application_date' => __('Leiter exam must be for 3 years and above')
                ]
            ], 422);
        }

        $report = $this->reportService->createEmptyReport($id, $request->application_date, $request->examiner_notes);

        /** @var User $user */
        $user = auth()->user();
        $user->update(['used_reports' => DB::raw('used_reports + 1')]);

        return $this->sendSuccessReponse($report);
    }

    /**
     * @param string $id
     *   Report id
     * @param Request $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionDelete(Request $request, $id)
    {
        $report = LeiterReport::findOrFail($id);

        if (!$this->reportService->canUserDeleteReport($request->user(), $report)) {
            return $this->sendErrorMessage("You don't have permission to delete this report", 403);
        }

        DB::beginTransaction();
        try {
            $report->delete();
            $report->reportCognitive->delete();
            $report->reportMemory->delete();
            $report->reportAttention->delete();
            $report->reportSupplementalAttention->delete();
            $report->reportExaminer->delete();
            $report->reportNarrative->delete();
            DB::commit();
        } catch (Throwable $th) {
            DB::rollBack();
            return $this->sendErrorMessage("Something went wrong, please contact website administrator", 500);
        }

        return $this->sendSuccessReponse([
            'message' => __('Deleted Successfully')
        ]);
    }

    public function actionExport(Request $request)
    {
        return Excel::download(new LeiterReportsExport($request, $this->leiterReportsQuery), 'leiter_reports.xlsx');
    }
}
