<?php

namespace App\Services;

use App\Enums\ExamTypesEnum;
use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Repositories\AbasExamRepository;
use App\Repositories\AbasExamSubDomainsRepository;
use App\Repositories\AbasSubDomainsRepository;
use App\Repositories\ExamineesRepository;
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

    public function __construct(
        AbasExamRepository $abasExamRepository,
        AbasSubDomainsRepository $abasSubDomainsRepository,
        AbasExamSubDomainsRepository $abasExamSubDomainsRepository,
        GeneralExamsService $generalExamsService,
        ExamineesRepository $examineesRepository
    ) {
        $this->abasExamRepository = $abasExamRepository;
        $this->abasSubDomainsRepository = $abasSubDomainsRepository;
        $this->abasExamSubDomainsRepository = $abasExamSubDomainsRepository;
        $this->generalExamsService = $generalExamsService;
        $this->examineesRepository = $examineesRepository;
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
                if ($ageInMonths < 24 || $ageInMonths > 263) {
                    throw new AgeNotAllowedException(__("ABAS teacher's exam must be for ages 2 to 21 years"));
                } elseif ($ageInMonths >= 24 && $ageInMonths <= 71) {
                    $category = 'teacher_24_71';
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
                if ($ageInMonths < 192 || $ageInMonths > 1091) {
                    throw new AgeNotAllowedException(__("ABAS adult's exam must be for ages 16 to 90 years"));
                }
                $category = 'adult_192_1091';
                break;
            default:
                throw new Exception('Invalid for value provided');
        }

        return $category;
    }
}
