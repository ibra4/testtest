<?php

namespace App\Models\Reports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCognitiveSubtest extends Model
{
    use HasFactory;

    protected $fillable = [
        'figure_ground',
        'form_completion',
        'classification_analogies',
        'sequential_order',
        'visual_patterns'
    ];
}
