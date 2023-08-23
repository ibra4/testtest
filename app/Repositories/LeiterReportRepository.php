<?php

namespace App\Repositories;

use App\Models\Reports\LeiterReport;

class LeiterReportRepository
{
    public function create(array $params)
    {
        return LeiterReport::create($params);
    }
}
