<?php

namespace App\Services;

class AdminsService
{    
    /**
     * getUsedReports
     *
     * @return int
     */
    public function isNumberOfReportsExceeded()
    {
        
        $user = auth()->user();

        $admin = $user->hasRole('admin') ? $user : $user->admin;
        
        $sub_admins_used_reports = $admin->subAdmins->sum('used_reports');

        $admin_used_reports = $admin->used_reports;

        $used = $sub_admins_used_reports + $admin_used_reports;

        return $used >= $admin->number_of_reports;
    }
}