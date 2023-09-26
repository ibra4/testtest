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

        $category = $this->getCategoryFromAge($request->for, $ageInMonths);

        DB::beginTransaction();
        try {
            $abasExam = $this->abasExamRepository->createExam([
                'examinee_id' => $examineeId,
                'created_by' => $user->id,
                'category' => $category,
                'application_date' => $request->application_date,
                'examiner_notes' => $request->examiner_notes
            ]);

            // @TODO: Check age of the examinee, some subdomains don't have scaled_score for that age
            // 1- Get Sub domains for category
            $subDomains = $this->abasSubDomainsRepository->getSubDomainsByCategory($category);

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
     * @return string
     */
    private function getCategoryFromAge(string $forWho, int $ageInMonths)
    {
        // 263  => 21 years 11 moths
        // 71   => 5 years 11 months
        // 24   => 2 years
        // 192  => 16 years
        // 1091 => 90 years 11 months
        switch ($forWho) {
            case 'teacher':
                if ($ageInMonths < 60 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS teacher's exam must be for ages 5 to 21 years"));
                }
                $category = AbasExamTypesEnum::TEACHER_5_21;
                break;
            case 'teacher_caregiver':
                if ($ageInMonths < 24 || $ageInMonths > 71) {
                    throw new AgeNotAllowedException(__("ABAS teacher caregiver exam must be for ages 2 to 5 years"));
                }
                $category = AbasExamTypesEnum::TEACHER_CAREGIVER_2_5;
                break;
            case 'parent':
                if ($ageInMonths < 0 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS parent's exam must be for ages 0 to 21 years"));
                } elseif ($ageInMonths >= 0 && $ageInMonths <= 71) {
                    $category = AbasExamTypesEnum::PARENT_0_5;
                } elseif ($ageInMonths >= 72) {
                    $category = AbasExamTypesEnum::PARENT_6_21;
                }
                break;
            case 'adult':
                if ($ageInMonths < 192 || $ageInMonths > 1091) {
                    throw new AgeNotAllowedException(__("ABAS adult's exam must be for ages 16 to 90 years"));
                }
                $category = AbasExamTypesEnum::ADULT_16_90;
                break;
            default:
                throw new Exception('Invalid for value provided');
        }

        return $category;
    }

    /**
     * updateSubDomain
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
            return $item;
        });
    }

    /**
     * Get exam results
     * 
     * @param Collection $examScaledScores
     */
    public function extrctDomainsFromExamScaledScores(Collection $examScaledScores): Collection
    {
        return $examScaledScores
            ->filter(function ($result) {
                return $result->domain_id;
            })
            ->groupBy('domain_id')
            ->map(function ($groupedItems) {
                $domain = $groupedItems->first();

                $sum = $groupedItems->sum(function ($item) {
                    return is_numeric($item->scaled_score) ? $item->scaled_score : 0;
                });

                return [
                    'id' => $domain->domain_id,
                    'name' => $domain->domain_name,
                    'sum' => $sum,
                ];
            });
    }

    /**
     * Get exam results
     * 
     * @param Collection $examScaledScores
     */
    public function getTotalScaledScore(Collection $examScaledScores): int
    {
        return $examScaledScores->sum(function ($item) {
            return is_numeric($item->scaled_score) ? $item->scaled_score : 0;
        });
    }
}
