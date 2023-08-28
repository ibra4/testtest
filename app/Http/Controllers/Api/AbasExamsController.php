<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLeiterExamRequest;
use App\Http\Requests\UpdateLeiterExamRequest;
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
     * @param UpdateLeiterExamRequest $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionCreate($id, CreateLeiterExamRequest $request)
    {
        try {
            $report = $this->abasExamsService->createExam($id, $request);
            return $this->sendSuccessReponse($report);
        } catch (AgeNotAllowedException $th) {
            return $this->sendValidationError(['application_date' => $th->getMessage()]);
        } catch (NumberOfExamsExceededException $th) {
            return $this->sendErrorMessage($th->getMessage(), 403);
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }
}
