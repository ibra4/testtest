<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAbasExamRequest;
use App\Http\Requests\UpdateAbasExamRequest;
use App\Http\Resources\AbasExamFullResource;
use App\Http\Resources\ExamineeResource;
use App\Http\Resources\ExaminerResource;
use App\Queries\AbasExamsQuery;
use App\Services\AbasExamsService;
use Illuminate\Http\Request;
use Throwable;

class AbasExamsController  extends Controller
{
    /**
     * @var AbasExamsService
     */
    protected $abasExamsService;

    /**
     * @var AbasExamsQuery
     */
    protected $abasExamsQuery;

    public function __construct(
        AbasExamsService $abasExamsService,
        AbasExamsQuery $abasExamsQuery
    ) {
        $this->abasExamsService = $abasExamsService;
        $this->abasExamsQuery = $abasExamsQuery;
    }

    /**
     * @param Request $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionIndex(Request $request)
    {
        $query = $this->abasExamsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
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

    /**
     * @param string $id
     *   AbasExam id
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionGetExamQuestions($id)
    {
        $abasExam = $this->abasExamsService->getExam($id);
        return $this->sendSuccessReponse([
            'exam_questions' => $this->abasExamsService->getExamQuestions($abasExam),
            'examinee' => new ExamineeResource($abasExam->examinee),
            'center' => new ExaminerResource($abasExam->examinee->center),
            'is_saved_questions' => $abasExam->is_saved_questions,
            'file_goals_ar' => route('abas_report.main3', ['lang' => 'ar', 'id' => $abasExam->id]),
            'file_goals_en' => route('abas_report.main3', ['lang' => 'en', 'id' => $abasExam->id]),
            'file_goals_desc_ar' => route('abas_report.main4', ['lang' => 'ar', 'id' => $abasExam->id]),
            'file_goals_desc_en' => route('abas_report.main4', ['lang' => 'en', 'id' => $abasExam->id])
        ]);
    }

    /**
     * @param string $examId
     *   AbasExam id
     * @param Request $request
     *   Request
     * @return \Illuminate\Http\JsonResponse
     */
    public function actionUpdateExamQuestions($examId, Request $request)
    {
        try {
            $abasExam = $this->abasExamsService->updateExamQuestions($examId, $request);
            return $this->sendSuccessReponse([
                'exam_questions' => $this->abasExamsService->getExamQuestions($abasExam),
                'examinee' => new ExamineeResource($abasExam->examinee),
                'center' => new ExaminerResource($abasExam->examinee->center),
                'examiner' => new ExaminerResource($abasExam->examiner),
                'is_saved_questions' => $abasExam->is_saved_questions,
                'file_goals_ar' => route('abas_report.main3', ['lang' => 'ar', 'id' => $abasExam->id]),
                'file_goals_en' => route('abas_report.main3', ['lang' => 'en', 'id' => $abasExam->id]),
                'file_goals_desc_ar' => route('abas_report.main4', ['lang' => 'ar', 'id' => $abasExam->id]),
                'file_goals_desc_en' => route('abas_report.main4', ['lang' => 'en', 'id' => $abasExam->id])
            ]);
        } catch (Throwable $th) {
            return $this->sendErrorMessage($th->getMessage(), 500);
        }
    }
}
