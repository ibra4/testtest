<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateExamRequest;
use App\Http\Resources\LatestReportsResource;
use App\Http\Resources\LeiterReportResource;
use App\Models\Reports\LeiterReport;
use App\Services\ReportsService;
use Illuminate\Support\Facades\DB;

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

    public function actionUpdate($id, $type, UpdateExamRequest $request)
    {
        $report = LeiterReport::findOrFail($id);

        $report = $this->reportService->updateReport($report, $type, $request);

        return response()->json($report);
    }
}
