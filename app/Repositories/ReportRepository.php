<?php

namespace App\Repositories;

use App\Models\Reports\LeiterReport;
use App\Models\User;

class ReportRepository
{
    /**
     * @return LeiterReport
     */
    public function createEmptyReport()
    {
        return LeiterReport::create([]);
    }

    public function create(array $params)
    {
        return LeiterReport::create($params);
    }

    public function getNumberOfUsedReportsForCenter(User $user)
    {
        $admin = $user->role == 'sub_admin' ? $user->admin : $user;
        $sub_admins_used_leiter_reports = $admin->subAdmins->sum('used_leiter_reports');

        return $sub_admins_used_leiter_reports + $admin->used_leiter_reports;
    }

    public function getNumberOfTotalReportsForCenter(User $user)
    {
        $admin = $user->role == 'sub_admin' ? $user->admin : $user;

        return $admin->number_of_leiter_reports;
    }
}
