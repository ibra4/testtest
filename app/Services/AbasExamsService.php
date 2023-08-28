<?php

namespace App\Services;

use App\Enums\ExamTypesEnum;
use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Models\AbasExamQuestion;
use App\Models\AbasQuestion;
use App\Models\Examinee;
use App\Models\User;
use App\Repositories\AbasExamRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class AbasExamsService
{
    /**
     * @var AbasExamRepository
     */
    private $abasExamRepository;

    /**
     * @var GeneralExamsService
     */
    private $generalExamsService;

    public function __construct(AbasExamRepository $abasExamRepository, GeneralExamsService $generalExamsService)
    {
        $this->abasExamRepository = $abasExamRepository;
        $this->generalExamsService = $generalExamsService;
    }

    public function createExam(int $examineeId, Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        if (!$this->generalExamsService->canUserCreateExam($user, ExamTypesEnum::ABAS)) {
            throw new NumberOfExamsExceededException('You have exceeded the allowed reports number, please contact website administrator');
        }

        $examinee = Examinee::findOrFail($examineeId);

        $ageInMonths = $this->generalExamsService->calculateAgeFromBirthdayAndAppDate($examinee->birthday, $request->application_date);

        // 263  => 21 years 11 moths
        // 71   => 5 years 11 months
        // 48   => 2 years
        $category = '';
        switch ($request->for) {
            case 'examiner':
                if ($ageInMonths < 48 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS teacher's exam must be for ages 2 to 21 years"));
                } elseif ($ageInMonths >= 48 && $ageInMonths <= 71) {
                    $category = 'teacher_48_71';
                } elseif ($ageInMonths >= 72) {
                    $category = 'teacher_72_263';
                }
                break;
            case 'parent':
                if ($ageInMonths < 0 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS teacher's exam must be for ages 2 to 21 years"));
                } elseif ($ageInMonths >= 0 && $ageInMonths <= 71) {
                    $category = 'parent_0_71';
                } elseif ($ageInMonths >= 72) {
                    $category = 'parent_72_263';
                }
                break;
            case 'adult':
                break;
            default:
                throw new Exception('Invalid for value provided');
        }

        DB::beginTransaction();
        try {
            $abasExam = $this->abasExamRepository->createExam([
                'examinee_id' => $examineeId,
                'created_by' => $user->id,
                'category' => $category,
                'application_date' => $request->application_date,
                'examiner_notes' => $request->examiner_notes
            ]);

            $questionsQuery = AbasQuestion::select('abas_questions.id');
            $questionsQuery->leftJoin('abas_sub_domains as asd', 'abas_questions.abas_sub_domain_id', '=', 'asd.id');
            $questionsQuery->where('asd.category', $category);
            $questions = $questionsQuery->get();

            foreach ($questions as $question) {
                AbasExamQuestion::create([
                    'abas_exam_id' => $abasExam->id,
                    'abas_question_id' => $question->id,
                    'result' => 0,
                    'guess' => false
                ]);
            }
            DB::commit();
            return $abasExam;
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
