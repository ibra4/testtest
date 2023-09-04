<?php

namespace App\Services;

use App\Enums\ExamTypesEnum;
use App\Exceptions\NumberOfExamsExceededException;
use App\Models\CasdExamSubDomain;
use App\Repositories\CasdExamSubDomainsRepository;
use App\Repositories\CasdExamRepository;
use App\Repositories\CasdSubDomainsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CasdExamsService
{
    /**
     * @var CasdExamRepository
     */
    private $casdExamRepository;

    /**
     * @var CasdSubDomainsRepository
     */
    private $casdSubDomainsRepository;

    /**
     * @var CasdExamSubDomainsRepository
     */
    private $casdExamSubDomainsRepository;

    /**
     * @var GeneralExamsService
     */
    private $generalExamsService;

    public function __construct(
        CasdExamRepository $casdExamRepository,
        CasdSubDomainsRepository $casdSubDomainsRepository,
        CasdExamSubDomainsRepository $casdExamSubDomainsRepository,
        GeneralExamsService $generalExamsService
    ) {
        $this->casdExamRepository = $casdExamRepository;
        $this->casdSubDomainsRepository = $casdSubDomainsRepository;
        $this->casdExamSubDomainsRepository = $casdExamSubDomainsRepository;
        $this->generalExamsService = $generalExamsService;
    }

    public function createExam(int $examineeId, Request $request)
    {
        $user = $request->user();

        if (!$this->generalExamsService->canUserCreateExam($user, ExamTypesEnum::CASD)) {
            throw new NumberOfExamsExceededException('You have exceeded the allowed reports number, please contact website administrator');
        }

        DB::beginTransaction();
        try {
            $casdExam = $this->casdExamRepository->createExam([
                'examinee_id' => $examineeId,
                'created_by' => $user->id,
                'application_date' => $request->application_date,
                'examiner_notes' => $request->examiner_notes
            ]);

            // 1- Get All Sub domains
            $subDomains = $this->casdSubDomainsRepository->getAllSubDomains();

            // 2- Create Exam Subdomains and Questions
            $this->casdExamSubDomainsRepository->createExamSubdomainsAndQuestions($casdExam->id, $subDomains);

            DB::commit();
            return $casdExam;
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * @param int $id
     * @return \App\Models\CasdExam
     */
    public function getExam($id)
    {
        return $this->casdExamRepository->getExamById($id);
    }

    /**
     * updateSubDomain
     *
     * @param int $examSubDomainId
     * @param  mixed $request
     * @return CasdExamSubDomain
     */
    public function updateSubDomain(int $examSubDomainId, Request $request): CasdExamSubDomain
    {
        DB::beginTransaction();
        try {
            $examSubDomain = $this->casdExamSubDomainsRepository->updateAnswers($examSubDomainId, $request->questions);
            DB::commit();
            return $examSubDomain;
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
