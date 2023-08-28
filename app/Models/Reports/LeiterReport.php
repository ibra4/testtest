<?php

namespace App\Models\Reports;

use App\Models\Traits\HasAgeAttribute;
use App\Models\Traits\HasExaminee;
use App\Models\Traits\HasExaminer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeiterReport extends Model
{
    use HasFactory, HasAgeAttribute, HasExaminee, HasExaminer;

    protected $fillable = [
        'examinee_id',
        'application_date',
        'created_by',
        'examiner_notes',
        'report_cognitive_subtest_id',
        'report_memory_battery_id',
        'report_attention_id',
        'report_supplemental_attention_id',
        'report_examiner_rating_scale_section_id',
        'report_narrative_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'updated_at' => 'datetime:d/m/Y - H:i:s',
        'created_at' => 'datetime:d/m/Y - H:i:s',
    ];

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

    public function reportSupplementalAttention()
    {
        return $this->hasOne(ReportSupplementalAttention::class, 'id', 'report_supplemental_attention_id');
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
