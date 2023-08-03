<?php

namespace App\Models\Reports;

use App\Models\interfaces\SubReportInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportExaminerRatingScaleSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'attention',
        'organization_impulse_control',
        'activity_level',
        'sociability',
        'energy_and_feelings',
        'regulation',
        'anxiety',
        'sensory_reaction',
        'file_en',
        'file_ar',
        'saved'
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

    public function getSavedAttribute($value)
    {
        return request()->user()->id == 1 ? false : $value;
    }
}
