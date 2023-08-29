<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Exports\LeiterReportsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeiterExamRequest;
use App\Http\Requests\UpdateLeiterExamRequest;
use App\Http\Resources\LeiterExamFullResource;
use App\Models\Reports\LeiterReport;
use App\Queries\LeiterReportsQuery;
use App\Services\LeiterExamsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Throwable;

class LeiterExamsController  extends Controller
{
    /**
     * @var LeiterReportsQuery
     */
    protected $leiterReportsQuery;

    /**
     * @var LeiterExamsService
     */
    protected $leiterExamsService;

    public function __construct(
        LeiterReportsQuery $leiterReportsQuery,
        LeiterExamsService $leiterExamsService
    ) {
        $this->leiterReportsQuery = $leiterReportsQuery;
        $this->leiterExamsService = $leiterExamsService;
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
        if (!Gate::allows('view-exam', $report)) {
            return $this->sendErrorMessage(__("You don't have permission to view this report"), 403, 'replace');
        }
        return $this->sendSuccessReponse(new LeiterExamFullResource($report));
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
        try {
            $report = $this->leiterExamsService->updateReport($id, $type, $request);
            return $this->sendSuccessReponse($report);
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
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
        try {
            $report = $this->leiterExamsService->createEmptyReport($id, $request);
            return $this->sendSuccessReponse($report);
        } catch (AgeNotAllowedException $th) {
            return $this->sendValidationError(['application_date' => $th->getMessage()]);
        } catch (NumberOfExamsExceededException $th) {
            return $this->sendErrorMessage($th->getMessage(), 403);
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
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
        try {
            $this->leiterExamsService->deleteExam($id, $request);
            return $this->sendSuccessReponse(['message' => __('Deleted Successfully')]);
        } catch (AccessDeniedHttpException $th) {
            return $this->sendErrorMessage($th->getMessage(), 403);
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }

    public function actionExport(Request $request)
    {
        try {
            return Excel::download(new LeiterReportsExport($request, $this->leiterReportsQuery), 'leiter_reports.xlsx');
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }
}
