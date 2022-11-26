<?php

namespace App\Repositories;

use App\Models\Reports\Report;

class ReportRepository
{
    /**
     * @return Report
     */
    public function createEmptyReport()
    {
        return Report::create([]);
    }

    public function create(array $params)
    {
        return Report::create($params);
    }
}
