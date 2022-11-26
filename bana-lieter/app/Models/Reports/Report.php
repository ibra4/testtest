<?php

namespace App\Models\Reports;

use App\Models\Examinee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_cognitive_subtest_id',
        'report_memory_battery_id',
        'report_attention_id',
        'report_examiner_rating_scale_section_id',
        'report_narrative_id'
    ];

    public function examinee()
    {
        return $this->hasOne(Examinee::class, 'report_id', 'id');
    }

    public function reportCognitive()
    {
        return $this->hasOne(ReportCognitiveSubtest::class, 'id', 'report_cognitive_subtest_id');
    }

    public function reportMemory()
    {
        return $this->hasOne(ReportMemoryBattery::class, 'id', 'report_memory_battery_id');
    }

    public function reportAttention()
    {
        return $this->hasOne(ReportAttention::class, 'id', 'report_attention_id');
    }

    public function reportExaminer()
    {
        return $this->hasOne(ReportExaminerRatingScaleSection::class, 'id', 'report_examiner_rating_scale_section_id');
    }

    public function reportNarrative()
    {
        return $this->hasOne(ReportNarrative::class, 'id', 'report_narrative_id');
    }
}
