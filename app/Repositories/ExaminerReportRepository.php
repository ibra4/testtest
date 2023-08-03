<?php

namespace App\Repositories;

use App\Models\Reports\ReportExaminerRatingScaleSection;

class ExaminerReportRepository
{
    /**
     * @return ReportExaminerRatingScaleSection
     */
    public function createEmptyReport()
    {
        return ReportExaminerRatingScaleSection::create([
            'attention' => 0,
            'organization_impulse_control' => 0,
            'activity_level' => 0,
            'sociability' => 0,
            'energy_and_feelings' => 0,
            'regulation' => 0,
            'anxiety' => 0,
            'sensory_reaction' => 0,
        ]);
    }
}
