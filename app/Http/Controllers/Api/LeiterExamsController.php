<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeiterExamRequest;
use App\Http\Requests\UpdateLeiterExamRequest;
use App\Http\Resources\LeiterReportResource;
use App\Models\Reports\LeiterReport;
use App\Models\User;
use App\Services\ReportsService;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class LeiterExamsController  extends Controller
{
    /**
     * @var ReportsService
     */
    protected $reportService;

    public function __construct(ReportsService $reportService)
    {
        $this->reportService = $reportService;
    }

    public function actionGet($id)
    {
        $report = LeiterReport::findOrFail($id);
        return response()->json(new LeiterReportResource($report));
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

        return response()->json($report);
    }

    /**
     * @param string $id
     *   Examinee id
     * @param UpdateLeiterExamRequest $request
     *   Request
     * @throws AccessDeniedHttpException
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionCreate($id, CreateLeiterExamRequest $request)
    {
        if (!$this->reportService->canUserCreateReport($request->user())) {
            throw new AccessDeniedHttpException('number_of_reports_exceeded');
        }

        $report = $this->reportService->createEmptyReport($id, $request->application_date, $request->examiner_notes);
        
        /** @var User $user */
        $user = auth()->user();
        $user->update(['used_reports' => DB::raw('used_reports + 1')]);

        return response()->json($report);
    }
}
