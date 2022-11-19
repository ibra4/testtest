<?php

namespace App\Models\Reports;

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
        'sensory_reaction'
    ];
}
