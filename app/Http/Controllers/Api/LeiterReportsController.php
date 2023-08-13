<?php

namespace App\Http\Controllers\Api;

use App\Exports\LeiterReportsExport;
use App\Http\Controllers\Controller;
use App\Models\Reports\LeiterReport;
use App\Queries\LeiterReportsQuery;
use App\Services\ReportsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class LeiterReportsController extends Controller
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

    public function actionIndex(Request $request)
    {
        $query = $this->leiterReportsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    public function actionExport(Request $request)
    {
        return Excel::download(new LeiterReportsExport($request, $this->leiterReportsQuery), 'leiter_reports.xlsx');
    }

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

        return $this->sendSuccessReponse([]);
    }
}
