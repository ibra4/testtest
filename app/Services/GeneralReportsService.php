<?php

namespace App\Services;

use App\Enums\ReportTypesEnum;
use App\Models\User;

class GeneralReportsService
{
    /**
     * Gets Number of Used Reports For Admin / Sub admin
     *
     * @param User $user
     * @param string $reportType
     * @return int
     */
    public function getNumberOfUsedReportsForCenter(User $user, string $reportType): int
    {
        $admin = $user->role == 'sub_admin' ? $user->admin : $user;

        switch ($reportType) {
            case ReportTypesEnum::LEITER:
                $colName = 'used_leiter_reports';
                break;
            case ReportTypesEnum::ABAS:
                $colName = 'used_abas_reports';
                break;
        }

        $sub_admins_used_reports = $admin->subAdmins->sum($colName);

        return $sub_admins_used_reports + $admin->$colName;
    }

    public function getNumberOfTotalReportsForCenter(User $user, string $reportType)
    {
        $admin = $user->role == 'sub_admin' ? $user->admin : $user;

        switch ($reportType) {
            case ReportTypesEnum::LEITER:
                $colName = 'number_of_leiter_reports';
                break;
            case ReportTypesEnum::ABAS:
                $colName = 'number_of_abas_reports';
                break;
        }

        return $admin->$colName;
    }
}
