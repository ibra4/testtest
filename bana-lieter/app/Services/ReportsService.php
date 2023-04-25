<?php

namespace App\Services;

use App\Models\Examinee;
use App\Repositories\AttentionReportRepository;
use App\Repositories\CognitiveReportRepository;
use App\Repositories\ExaminerReportRepository;
use App\Repositories\MemoryReportRepository;
use App\Repositories\NarrativeReportRepository;
use App\Repositories\ReportRepository;
use App\Models\Reports\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportsService
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
        ReportRepository $reportRepository
    ) {
        $this->cognitiveReportRepository = $cognitiveReportRepository;
        $this->attentionReportRepository = $attentionReportRepository;
        $this->examinerReportRepository = $examinerReportRepository;
        $this->memoryReportRepository = $memoryReportRepository;
        $this->narrativeReportRepository = $narrativeReportRepository;
        $this->reportRepository = $reportRepository;
    }

    /**
     * createExamineeReport
     *
     * @return Report
     */
    public function createEmptyReport()
    {
        DB::beginTransaction();
        try {
            $cognitive = $this->cognitiveReportRepository->createEmptyReport();
            $attention = $this->attentionReportRepository->createEmptyReport();
            $examiner = $this->examinerReportRepository->createEmptyReport();
            $memory = $this->memoryReportRepository->createEmptyReport();
            $narrative = $this->narrativeReportRepository->createEmptyReport();

            $report = $this->reportRepository->create([
                'report_cognitive_subtest_id' => $cognitive->id,
                'report_memory_battery_id' => $memory->id,
                'report_attention_id' => $attention->id,
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
     * @param Examinee $examinee
     * @param string $type
     * @return Model
     */
    public function getSubReportModel(Examinee $examinee, string $type)
    {
        $report = $examinee->report;

        switch ($type) {
            case 'cognitive':
                return $report->reportCognitive;
            case 'memory':
                return $report->reportMemory;
            case 'attention':
                return $report->reportAttention;
            case 'examiner':
                return $report->reportExaminer;
            case 'narrative':
                return $report->reportNarrative;
        }
    }

    /**
     * @param Examinee $examinee
     * @param string $type
     * @param Request $request
     * @return Model
     */
    public function updateReport(Examinee $examinee, string $type, Request $request)
    {
        $report = $this->getSubReportModel($examinee, $type);

        $data = $request->only($report->getFillable());

        $data['saved'] = request()->user()->id == 1 ? false : true;
        
        $report->fill($data)->save();

        return $report;
    }
}
