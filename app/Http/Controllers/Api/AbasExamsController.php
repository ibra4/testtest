<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAbasExamRequest;
use App\Http\Requests\UpdateAbasExamRequest;
use App\Http\Resources\AbasExamFullResource;
use App\Services\AbasExamsService;
use Throwable;

class AbasExamsController  extends Controller
{
    /**
     * @var AbasExamsService
     */
    protected $abasExamsService;

    public function __construct(
        AbasExamsService $abasExamsService
    ) {
        $this->abasExamsService = $abasExamsService;
    }

    /**
     * @param string $id
     *   Examinee id
     * @param CreateAbasExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionCreate($id, CreateAbasExamRequest $request)
    {
        try {
            $exam = $this->abasExamsService->createExam($id, $request);
            return $this->sendSuccessReponse($exam);
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
     *   AbasExam id
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionGet($id)
    {
        try {
            $exam = $this->abasExamsService->getExam($id);
            return $this->sendSuccessReponse(new AbasExamFullResource($exam));
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }

    /**
     * @param string $exam_sub_domain_id
     *   AbasExamSubDomain id
     * @param UpdateAbasExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionUpdate($exam_sub_domain_id, UpdateAbasExamRequest $request)
    {
        try {
            $examSubDomain = $this->abasExamsService->updateSubDomain($exam_sub_domain_id, $request);
            return $this->sendSuccessReponse(new AbasExamFullResource($examSubDomain->exam));
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }
}
