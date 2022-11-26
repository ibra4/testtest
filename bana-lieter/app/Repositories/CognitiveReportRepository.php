<?php

namespace App\Repositories;

use App\Models\Reports\ReportCognitiveSubtest;

class CognitiveReportRepository
{
    /**
     * @return ReportCognitiveSubtest
     */
    public function createEmptyReport()
    {
        return ReportCognitiveSubtest::create([
            'figure_ground' => 0,
            'form_completion' => 0,
            'classification_analogies' => 0,
            'sequential_order' => 0,
            'visual_patterns' => 0,
        ]);
    }
}
