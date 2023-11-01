<?php

namespace App\Services;

use App\Enums\AbasExamTypesEnum;
use App\Enums\ExamTypesEnum;
use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Models\AbasExam;
use App\Models\AbasExamSubDomain;
use App\Repositories\AbasExamRepository;
use App\Repositories\AbasExamSubDomainsRepository;
use App\Repositories\AbasSubDomainsRepository;
use App\Repositories\ExamineesRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Throwable;

class AbasExamsService
{
    /**
     * @var AbasExamRepository
     */
    private $abasExamRepository;

    /**
     * @var AbasSubDomainsRepository
     */
    private $abasSubDomainsRepository;

    /**
     * @var AbasExamSubDomainsRepository
     */
    private $abasExamSubDomainsRepository;

    /**
     * @var GeneralExamsService
     */
    private $generalExamsService;

    /**
     * @var ExamineesRepository
     */
    private $examineesRepository;

    /**
     * @var AbasRecordsService
     */
    private $abasRecordsService;

    public function __construct(
        AbasExamRepository $abasExamRepository,
        AbasSubDomainsRepository $abasSubDomainsRepository,
        AbasExamSubDomainsRepository $abasExamSubDomainsRepository,
        GeneralExamsService $generalExamsService,
        ExamineesRepository $examineesRepository,
        AbasRecordsService $abasRecordsService
    ) {
        $this->abasExamRepository = $abasExamRepository;
        $this->abasSubDomainsRepository = $abasSubDomainsRepository;
        $this->abasExamSubDomainsRepository = $abasExamSubDomainsRepository;
        $this->generalExamsService = $generalExamsService;
        $this->examineesRepository = $examineesRepository;
        $this->abasRecordsService = $abasRecordsService;
    }

    public function createExam(int $examineeId, Request $request)
    {
        $user = $request->user();

        if (!$this->generalExamsService->canUserCreateExam($user, ExamTypesEnum::ABAS)) {
            throw new NumberOfExamsExceededException('You have exceeded the allowed reports number, please contact website administrator');
        }

        $examinee = $this->examineesRepository->getById($examineeId);

        $ageInMonths = $this->generalExamsService->calculateAgeFromBirthdayAndAppDate($examinee->birthday, $request->application_date);

        $this->validateCategoryAge($request->for, $ageInMonths);

        DB::beginTransaction();
        try {
            $abasExam = $this->abasExamRepository->createExam([
                'examinee_id' => $examineeId,
                'created_by' => $user->id,
                'category' => $request->for,
                'application_date' => $request->application_date,
                'examiner_notes' => $request->examiner_notes
            ]);

            // 1- Get Sub domains for category
            $subDomains = $this->abasSubDomainsRepository->getSubDomainsByCategory($request->for, $ageInMonths);

            // 2- Create Exam Subdomains and Questions
            $this->abasExamSubDomainsRepository->createExamSubdomainsAndQuestions($abasExam->id, $subDomains);

            DB::commit();
            return $abasExam;
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * @param int $id
     * @return \App\Models\AbasExam
     */
    public function getExam($id)
    {
        return $this->abasExamRepository->getExamById($id);
    }

    /**
     * @param  mixed $forWho
     * @param  mixed $ageInMonths
     * @throws AgeNotAllowedException
     * @return void
     */
    private function validateCategoryAge(string $forWho, int $ageInMonths)
    {
        switch ($forWho) {
            case AbasExamTypesEnum::TEACHER:
                if ($ageInMonths < 60 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS teacher's exam must be for ages 5 to 21 years"));
                }
                break;
            case AbasExamTypesEnum::TEACHER_CAREGIVER:
                if ($ageInMonths < 24 || $ageInMonths > 71) {
                    throw new AgeNotAllowedException(__("ABAS teacher caregiver exam must be for ages 2 to 5 years"));
                }
                break;
            case AbasExamTypesEnum::PARENT:
                if ($ageInMonths < 60 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS parent exam must be for ages 5 to 21 years"));
                }
                break;
            case AbasExamTypesEnum::PARENT_CAREGIVER:
                if ($ageInMonths < 0 || $ageInMonths > 71) {
                    throw new AgeNotAllowedException(__("ABAS parent caregiver exam must be for ages 0 to 5 years"));
                }
                break;
            case AbasExamTypesEnum::ADULT_BY_SELF:
            case AbasExamTypesEnum::ADULT_BY_OTHERS:
                if ($ageInMonths < 192 || $ageInMonths > 1091) {
                    throw new AgeNotAllowedException(__("ABAS adult's exam must be for ages 16 to 90 years"));
                }
                break;
            default:
                throw new Exception('Invalid for value provided');
        }
    }

    /**
     * Update exam subdomain answers
     *
     * @param int $examSubDomainId
     * @param  mixed $request
     * @return AbasExamSubDomain
     */
    public function updateSubDomain(int $examSubDomainId, Request $request): AbasExamSubDomain
    {
        DB::beginTransaction();
        try {
            $examSubDomain = $this->abasExamSubDomainsRepository->updateAnswers($examSubDomainId, $request->questions);
            DB::commit();
            return $examSubDomain;
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Get exam results
     * 
     * @param int $id
     */
    public function getSubDomainsScaledScores(int $id): Collection
    {
        $abasExam = $this->abasExamRepository->getExamById($id);

        $results =  $this->abasExamRepository->getSubDomainsScaledScores($id);

        return $results->map(function ($item) use ($abasExam) {
            $item->scaled_score = $this->abasRecordsService->getScaledScore($item->result, $abasExam->age, $abasExam->category, $item->code);
            $item->age_equ = $this->abasRecordsService->getEquivalentAge($item->result, $abasExam->category, $item->code);
            return $item;
        });
    }

    /**
     * Get exam results
     * 
     * @param Collection $examScaledScores
     */
    public function extrctDomainsFromExamScaledScores(int $age, string $category, Collection $examScaledScores): Collection
    {
        $mainDomains = $examScaledScores
            ->filter(function ($result) {
                return $result->domain_id;
            })
            ->groupBy('domain_id')
            ->map(function ($groupedItems) use ($age, $category) {
                $subDomain = $groupedItems->first();

                $sum = $groupedItems->sum(function ($item) {
                    return is_numeric($item->scaled_score) ? $item->scaled_score : 0;
                });

                $composite = $this->abasRecordsService->getCompositeAndPercentile($sum, $age, $category, $subDomain->domain_code);
                return [
                    'id' => $subDomain->domain_id,
                    'name' => $subDomain->domain_name,
                    'sum' => $sum,
                    'composite' => $composite,
                    'domain_code' => $subDomain->domain_code,
                    'confidence' => $this->abasRecordsService->getConfidence(
                        $composite['std_score'],
                        $age,
                        $category,
                        $subDomain->domain_code
                    )
                ];
            });

        $additionalDomains = config("abas.additional_domains.$category", []);
        foreach ($additionalDomains as $additionalDomain) {
            $additionalDomainSum = $this->getAdditionalDomainSum(
                $additionalDomain['sum_of'],
                $examScaledScores
            );
            $composite = $this->abasRecordsService->getCompositeAndPercentile(
                $additionalDomainSum,
                $age,
                $category,
                $additionalDomain['code']
            );
            $mainDomains->prepend([
                'id' => $additionalDomain['code'],
                'name' => $additionalDomain['name'],
                'sum' => $additionalDomainSum,
                'composite' => $composite,
                'domain_code' => $additionalDomain['code'],
                'confidence' => $this->abasRecordsService->getConfidence(
                    $composite['std_score'],
                    $age,
                    $category,
                    $additionalDomain['code']
                )
            ]);
        }

        return $mainDomains;
    }

    /**
     * Gets exam subdomains results
     * 
     * @param int $examId
     * @return Collection
     */
    public function getExamSubdomainsResults(int $examId): Collection
    {
        return $this->abasExamRepository->getExamSubdomainsResults($examId);
    }

    /**
     * @param AbasExam $abasExam
     * @return array
     */
    public function getExamQuestions(AbasExam $abasExam): array
    {
        $categorizedQuestions = [];
        foreach ($abasExam->subDomains as $abasExamSubDomain) {
            $categorizedQuestions[$abasExamSubDomain->id]['sub_domain'] = array_merge(
                $abasExamSubDomain->subDomain->toArray(),
                ['id' => $abasExamSubDomain->id]
            );
            foreach ($abasExamSubDomain->questions as $abasSubDomainQuestion) {
                $categorizedQuestions[$abasExamSubDomain->id]['questions'][] = [
                    'id' => $abasSubDomainQuestion->id,
                    'question_id' => $abasSubDomainQuestion->question->id,
                    'question_number' => $abasSubDomainQuestion->question->question_number,
                    'name' => $abasSubDomainQuestion->question->name,
                    'name_en' => $abasSubDomainQuestion->question->name_en,
                    'result' => $abasSubDomainQuestion->result,
                    'show_in_report' => $abasSubDomainQuestion->show_in_report,
                ];
            }
        }

        return $categorizedQuestions;
    }

    /**
     * Get additional domain sum
     * 
     * @param array $subDomains
     * @param Collection $examScaledScores
     * @return int
     */
    private function getAdditionalDomainSum(array $subDomains, Collection $examScaledScores): int
    {
        return $examScaledScores->filter(function ($item) use ($subDomains) {
            return in_array($item->code, $subDomains);
        })->sum(function ($item) {
            return is_numeric($item->scaled_score) ? $item->scaled_score : 0;
        });
    }

    /**
     * Update exam questions
     * 
     * @param int $examId
     *   AbasExam id
     * @param Request $request
     * @return AbasExam
     */
    public function updateExamQuestions(int $examId, Request $request): AbasExam
    {
        $abasExam = $this->getExam($examId);
        DB::beginTransaction();
        try {
            $this->abasExamRepository->updateExamQuestions($abasExam, $request->all());
            DB::commit();
            return $abasExam;
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
