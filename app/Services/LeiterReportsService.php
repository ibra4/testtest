<?php

namespace App\Services;

use App\Models\Examinee;
use App\Repositories\AttentionReportRepository;
use App\Repositories\CognitiveReportRepository;
use App\Repositories\ExaminerReportRepository;
use App\Repositories\MemoryReportRepository;
use App\Repositories\NarrativeReportRepository;
use App\Repositories\ReportRepository;
use App\Models\Reports\LeiterReport;
use App\Models\User;
use App\Repositories\SupplimentalAttentionReportRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LeiterReportsService
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
     * @var ReportRepository
     */
    protected $reportRepository;

    public function __construct(
        CognitiveReportRepository $cognitiveReportRepository,
        AttentionReportRepository $attentionReportRepository,
        ExaminerReportRepository $examinerReportRepository,
        MemoryReportRepository $memoryReportRepository,
        NarrativeReportRepository $narrativeReportRepository,
        ReportRepository $reportRepository,
        SupplimentalAttentionReportRepository $supplimentalAttentionReportRepository
    ) {
        $this->cognitiveReportRepository = $cognitiveReportRepository;
        $this->attentionReportRepository = $attentionReportRepository;
        $this->examinerReportRepository = $examinerReportRepository;
        $this->memoryReportRepository = $memoryReportRepository;
        $this->narrativeReportRepository = $narrativeReportRepository;
        $this->reportRepository = $reportRepository;
        $this->supplimentalAttentionReportRepository = $supplimentalAttentionReportRepository;
    }

    /**
     * Creates Empty Leiter Exam
     * 
     * @param int $examineeId
     * @param string $applicationDate
     * @return LeiterReport
     */
    public function createEmptyReport(int $examineeId, string $applicationDate, string $examinerNotes = null)
    {
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
                'application_date' => $applicationDate,
                'created_by' => auth()->user()->id,
                'examiner_notes' => $examinerNotes,
                'report_cognitive_subtest_id' => $cognitive->id,
                'report_memory_battery_id' => $memory->id,
                'report_attention_id' => $attention->id,
                'report_supplemental_attention_id' => $supplementalAttention->id,
                'report_examiner_rating_scale_section_id' => $examiner->id,
                'report_narrative_id' => $narrative->id,
            ]);

            DB::commit();
        } catch (\Throwable $th) {
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
     * @param LeiterReport $report
     * @param string $type
     * @param Request $request
     * @return Model
     */
    public function updateReport(LeiterReport $report, string $type, Request $request)
    {
        $report = $this->getSubReportModel($report, $type);

        $data = $request->only($report->getFillable());

        $data['saved'] = request()->user()->id == 1 ? false : true;

        $report->fill($data)->save();

        return $report;
    }

    // @TODO: Move it to another service
    public function canUserCreateReport(User $user)
    {
        if ($user->role == 'root') {
            return true;
        }
        return $this->reportRepository->getNumberOfUsedReportsForCenter($user)
            < $this->reportRepository->getNumberOfTotalReportsForCenter($user);
    }

    // @TODO: Move it to another service
    public function canUserDeleteReport(User $user, LeiterReport $report)
    {
        if ($user->hasRole('root')) {
            return true;
        }
        return $user->id == $report->created_by;
    }
}
