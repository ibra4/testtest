<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCasdExamRequest;
use App\Http\Requests\UpdateCasdExamRequest;
use App\Http\Resources\CasdExamFullResource;
use App\Services\CasdExamsService;
use Throwable;

class CasdExamsController  extends Controller
{
    /**
     * @var CasdExamsService
     */
    protected $casdExamsService;

    public function __construct(
        CasdExamsService $casdExamsService
    ) {
        $this->casdExamsService = $casdExamsService;
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
     * @param string $exam_sub_domain_id
     *   CasdExamSubDomain id
     * @param UpdateCasdExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionUpdate($exam_sub_domain_id, UpdateCasdExamRequest $request)
    {
        try {
            $examSubDomain = $this->casdExamsService->updateSubDomain($exam_sub_domain_id, $request);
            return $this->sendSuccessReponse(new CasdExamFullResource($examSubDomain->exam));
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }
}
