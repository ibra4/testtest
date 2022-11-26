<?php

namespace App\Repositories;

use App\Models\Reports\ReportNarrative;

class NarrativeReportRepository
{
    /**
     * @return ReportNarrative
     */
    public function createEmptyReport()
    {
        return ReportNarrative::create([]);
    }
}
