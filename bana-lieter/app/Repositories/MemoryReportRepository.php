<?php

namespace App\Repositories;

use App\Models\Reports\ReportMemoryBattery;

class MemoryReportRepository
{
    /**
     * @return ReportMemoryBattery
     */
    public function createEmptyReport()
    {
        return ReportMemoryBattery::create([
            'forward_memory' => 0,
            'reverse_memory' => 0,
        ]);
    }
}
