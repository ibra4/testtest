<?php

namespace App\Services;

use App\Enums\ExamTypesEnum;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Throwable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class GeneralExamsService
{
    public function getNumberOfUsedReportsForCenter(User $user)
    {
        $sum = 0;
        foreach (ExamTypesEnum::getAllFields() as $reportType) {
            $sum += $this->getNumberOfUsedReportsForCenterByType($user, $reportType);
        }

        return $sum;
    }

    public function getNumberOfTotalReportsForCenter(User $user)
    {
        $sum = 0;
        foreach (ExamTypesEnum::getAllFields() as $reportType) {
            $sum += $this->getNumberOfTotalReportsForCenterByType($user, $reportType);
        }

        return $sum;
    }

    public function getNumberOfTotalReportsForAllCenters()
    {
        $allAdmins = User::where('role', 'admin');

        return $allAdmins->sum('number_of_leiter_reports')
            + $allAdmins->sum('number_of_abas_reports')
            + $allAdmins->sum('number_of_mpr_reports')
            + $allAdmins->sum('number_of_casd_reports');
    }

    public function getNumberOfUsedReportsForAllCenters()
    {
        $allAdmins = User::whereIn('role', ['admin', 'sub_admin']);

        return $allAdmins->sum('used_leiter_reports')
            + $allAdmins->sum('used_abas_reports')
            + $allAdmins->sum('used_mpr_reports')
            + $allAdmins->sum('used_casd_reports');
    }

    /**
     * Gets Number of Used Reports For Admin / Sub admin
     *
     * @param User $user
     * @param string $reportType
     * @return int
     */
    public function getNumberOfUsedReportsForCenterByType(User $user, string $reportType): int
    {
        try {

            $admin = $user->role == 'sub_admin' ? $user->admin : $user;

            switch ($reportType) {
                case ExamTypesEnum::LEITER:
                    $colName = 'used_leiter_reports';
                    break;
                case ExamTypesEnum::ABAS:
                    $colName = 'used_abas_reports';
                    break;
                case ExamTypesEnum::MPR:
                    $colName = 'used_mpr_reports';
                    break;
                case ExamTypesEnum::CASD:
                    $colName = 'used_casd_reports';
                    break;
            }

            $sub_admins_used_reports = $admin->subAdmins->sum($colName);

            return $sub_admins_used_reports + $admin->$colName;
        } catch (Throwable $th) {
            Log::error(sprintf(
                'Error getting number of used reports for user %d, reportType: %s, errorMsg: %s',
                $user->id,
                $reportType,
                $th->getMessage()
            ));
            return 0;
        }
    }

    public function getNumberOfTotalReportsForCenterByType(User $user, string $reportType)
    {
        try {
            $admin = $user->role == 'sub_admin' ? $user->admin : $user;

            switch ($reportType) {
                case ExamTypesEnum::LEITER:
                    $colName = 'number_of_leiter_reports';
                    break;
                case ExamTypesEnum::ABAS:
                    $colName = 'number_of_abas_reports';
                    break;
                case ExamTypesEnum::MPR:
                    $colName = 'number_of_mpr_reports';
                    break;
                case ExamTypesEnum::CASD:
                    $colName = 'number_of_casd_reports';
                    break;
            }

            return $admin->$colName;
        } catch (Throwable $th) {
            Log::error(sprintf(
                'Error getting number of total reports for user %d, reportType: %s, errorMsg: %s',
                $user->id,
                $reportType,
                $th->getMessage()
            ));
            return 0;
        }
    }

    /**
     * @param string $birthday
     * @param string $applicationDate
     * 
     * @return int
     */
    public function calculateAgeFromBirthdayAndAppDate($birthday, $applicationDate)
    {
        $birthday = new Carbon($birthday);
        $applicationDate = new Carbon($applicationDate);

        $diff = $birthday->diff($applicationDate);

        $years = $diff->format("%y");
        $months = $diff->format("%m");

        $ageInMonths = $years * 12 + $months;

        return $ageInMonths;
    }

    /**
     * @param User $user
     * @param string $type
     * 
     * @return bool
     */
    public function canUserCreateExam(User $user, string $type): bool
    {
        if ($user->role == 'root') {
            return true;
        }
        return $this->getNumberOfUsedReportsForCenterByType($user, $type)
            < $this->getNumberOfTotalReportsForCenterByType($user, $type);
    }

    /**
     * @param User $user
     * @param Model $exam
     * 
     * @return bool
     */
    public function canUserDeleteExam(User $user, Model $exam)
    {
        if ($user->hasRole('root')) {
            return true;
        }
        return $user->id == $exam->created_by;
    }
}
