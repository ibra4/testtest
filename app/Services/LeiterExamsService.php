<?php

namespace App\Services;

use App\Enums\ExamTypesEnum;
use App\Exceptions\AgeNotAllowedException;
use App\Exceptions\NumberOfExamsExceededException;
use App\Models\Examinee;
use App\Repositories\AttentionReportRepository;
use App\Repositories\CognitiveReportRepository;
use App\Repositories\ExaminerReportRepository;
use App\Repositories\MemoryReportRepository;
use App\Repositories\NarrativeReportRepository;
use App\Repositories\LeiterReportRepository;
use App\Models\Reports\LeiterReport;
use App\Models\User;
use App\Repositories\SupplimentalAttentionReportRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Throwable;

class LeiterExamsService
{
    /**
     * @var CognitiveReportRepository
     */
    protected $cognitiveReportRepository;

    /**
     * @var AttentionReportRepository
     */
    protected $attentionReportRepository;

    /**
     * @var SupplimentalAttentionReportRepository
     */
    protected $supplimentalAttentionReportRepository;

    /**
     * @var ExaminerReportRepository
     */
    protected $examinerReportRepository;

    /**
     * @var MemoryReportRepository
     */
    protected $memoryReportRepository;

    /**
     * @var NarrativeReportRepository
     */
    protected $narrativeReportRepository;

    /**
     * @var GeneralExamsService
     */
    protected $generalExamsService;

    /**
     * @var LeiterReportRepository
     */
    protected $reportRepository;

    public function __construct(
        CognitiveReportRepository $cognitiveReportRepository,
        AttentionReportRepository $attentionReportRepository,
        ExaminerReportRepository $examinerReportRepository,
        MemoryReportRepository $memoryReportRepository,
        NarrativeReportRepository $narrativeReportRepository,
        LeiterReportRepository $reportRepository,
        SupplimentalAttentionReportRepository $supplimentalAttentionReportRepository,
        GeneralExamsService $generalExamsService
    ) {
        $this->cognitiveReportRepository = $cognitiveReportRepository;
        $this->attentionReportRepository = $attentionReportRepository;
        $this->examinerReportRepository = $examinerReportRepository;
        $this->memoryReportRepository = $memoryReportRepository;
        $this->narrativeReportRepository = $narrativeReportRepository;
        $this->reportRepository = $reportRepository;
        $this->supplimentalAttentionReportRepository = $supplimentalAttentionReportRepository;
        $this->generalExamsService = $generalExamsService;
    }

    /**
     * Creates Empty Leiter Exam
     * 
     * @param int $examineeId
     * @param string $applicationDate
     * @throws NumberOfExamsExceededException
     * @throws ModelNotFoundException
     * @return LeiterReport
     */
    public function createEmptyReport(int $examineeId, Request $request)
    {
        /** @var User $user */
        $user = $request->user();

        if (!$this->generalExamsService->canUserCreateExam($user, ExamTypesEnum::LEITER)) {
            throw new NumberOfExamsExceededException('You have exceeded the allowed reports number, please contact website administrator');
        }

        $examinee = Examinee::findOrFail($examineeId);

        $ageInMonths = $this->generalExamsService->calculateAgeFromBirthdayAndAppDate($examinee->birthday, $request->application_date);

        if ($ageInMonths < 36) {
            throw new AgeNotAllowedException(__('Leiter exam must be for 3 years and above'));
        }

        DB::beginTransaction();
        try {
            $cognitive = $this->cognitiveReportRepository->createEmptyReport();
            $attention = $this->attentionReportRepository->createEmptyReport();
            $supplementalAttention = $this->supplimentalAttentionReportRepository->createEmptyReport();
            $examiner = $this->examinerReportRepository->createEmptyReport();
            $memory = $this->memoryReportRepository->createEmptyReport();
            $narrative = $this->narrativeReportRepository->createEmptyReport();

            $report = $this->reportRepository->create([
                'examinee_id' => $examineeId,
                'application_date' => $request->application_date,
                'created_by' => $user->id,
                'examiner_notes' => $request->examiner_notes,
                'report_cognitive_subtest_id' => $cognitive->id,
                'report_memory_battery_id' => $memory->id,
                'report_attention_id' => $attention->id,
                'report_supplemental_attention_id' => $supplementalAttention->id,
                'report_examiner_rating_scale_section_id' => $examiner->id,
                'report_narrative_id' => $narrative->id,
            ]);

            DB::commit();
            $user->update(['used_leiter_reports' => DB::raw('used_leiter_reports + 1')]);
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
        return $report;
    }

    /**
     * @param Examinee $report
     * @param string $type
     * @return Model
     */
    public function getSubReportModel(LeiterReport $report, string $type)
    {
        switch ($type) {
            case 'cognitive':
                return $report->reportCognitive;
            case 'memory':
                return $report->reportMemory;
            case 'attention':
                return $report->reportAttention;
            case 'supplemental_attention':
                return $report->reportSupplementalAttention;
            case 'examiner':
                return $report->reportExaminer;
            case 'narrative':
                return $report->reportNarrative;
        }
    }

    /**
     * @param int $reportId
     * @param string $type
     * @param Request $request
     * @return Model
     */
    public function updateReport(int $reportId, string $type, Request $request)
    {
        $report = LeiterReport::findOrFail($reportId);

        $report = $this->getSubReportModel($report, $type);

        $data = $request->only($report->getFillable());

        $data['saved'] = request()->user()->id == 1 ? false : true;

        $report->fill($data)->save();

        return $report;
    }

    public function deleteExam(int $examId, Request $request)
    {
        $user = $request->user();
        $report = LeiterReport::findOrFail($examId);

        if (!$this->generalExamsService->canUserDeleteExam($user, $report)) {
            throw new AccessDeniedHttpException(__("You don't have permission to delete this report"));
        }

        DB::beginTransaction();
        try {
            $report->delete();
            $report->reportCognitive->delete();
            $report->reportMemory->delete();
            $report->reportAttention->delete();
            $report->reportSupplementalAttention->delete();
            $report->reportExaminer->delete();
            $report->reportNarrative->delete();
            DB::commit();
        } catch (Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
