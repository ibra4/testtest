<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCasdExamRequest;
use App\Http\Requests\UpdateCasdExamRequest;
use App\Http\Resources\CasdExamFullResource;
use App\Queries\CasdExamsQuery;
use App\Services\CasdExamsService;
use Illuminate\Http\Request;
use Throwable;

class CasdExamsController  extends Controller
{
    /**
     * @var CasdExamsService
     */
    protected $casdExamsService;

    /**
     * @var CasdExamsQuery
     */
    protected $casdExamsQuery;

    public function __construct(
        CasdExamsService $casdExamsService,
        CasdExamsQuery $casdExamsQuery
    ) {
        $this->casdExamsService = $casdExamsService;
        $this->casdExamsQuery = $casdExamsQuery;
    }

    /**
     * @param Request $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionIndex(Request $request)
    {
        $query = $this->casdExamsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    /**
     * @param string $id
     *   Examinee id
     * @param CreateCasdExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionCreate($id, CreateCasdExamRequest $request)
    {
        try {
            $exam = $this->casdExamsService->createExam($id, $request);
            return $this->sendSuccessReponse($exam);
        } catch (NumberOfExamsExceededException $th) {
            return $this->sendErrorMessage($th->getMessage(), 403);
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }

    /**
     * @param string $id
     *   CasdExam id
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionGet($id)
    {
        try {
            $exam = $this->casdExamsService->getExam($id);
            return $this->sendSuccessReponse(new CasdExamFullResource($exam));
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }

    /**
     * @param string $id
     *   CasdExam id
     * @param UpdateCasdExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionUpdate($id, UpdateCasdExamRequest $request)
    {
        try {
            $exam = $this->casdExamsService->updateExamAnswers($id, $request);
            return $this->sendSuccessReponse(new CasdExamFullResource($exam));
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }
}
