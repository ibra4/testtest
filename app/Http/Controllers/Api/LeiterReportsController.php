<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Queries\LeiterReportsQuery;
use App\Services\ReportsService;
use Illuminate\Http\Request;

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
        return response()->json($query->paginate());
    }
}
