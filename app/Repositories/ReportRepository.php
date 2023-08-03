<?php

namespace App\Repositories;

use App\Models\Reports\Report;
use App\Models\User;

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

    public function getNumberOfUsedReportsForCenter(User $user)
    {
        $admin = $user->role == 'sub_admin' ? $user->admin : $user;
        $sub_admins_used_reports = $admin->subAdmins->sum('used_reports');

        return $sub_admins_used_reports + $admin->used_reports;
    }

    public function getNumberOfTotalReportsForCenter(User $user)
    {
        $admin = $user->role == 'sub_admin' ? $user->admin : $user;

        return $admin->number_of_reports;
    }
}
