<?php

namespace App\Models\Reports;

use App\Models\Examinee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeiterReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'examinee_id',
        'application_date',
        'created_by',
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

    public function getAgeAttribute()
    {
        $birthday = new Carbon($this->examinee->birthday);
        $applicationDate = $this->application_date ? new Carbon($this->application_date) : Carbon::now();
        $diff = $birthday->diff($applicationDate);
        $years = $diff->format("%y");
        $months = $diff->format("%m");
        return $years * 12 + $months;
    }

    public function getFormatedAgeAttribute()
    {
        $birthday = new Carbon($this->examinee->birthday);
        $applicationDate = $this->application_date ? new Carbon($this->application_date) : Carbon::now();
        $diff = $birthday->diff($applicationDate);

        return [
            'years' => $diff->format("%y"),
            'months' => $diff->format("%m"),
        ];
    }

    public function examinee()
    {
        return $this->belongsTo(Examinee::class, 'examinee_id', 'id');
    }

    public function examiner()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
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
