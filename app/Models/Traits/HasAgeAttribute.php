<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait HasAgeAttribute
{
    public function getAgeAttribute()
    {
        $birthday = new Carbon($this->examinee->birthday);
        $applicationDate = $this->application_date ? new Carbon($this->application_date) : Carbon::now();
        $diff = $birthday->diff($applicationDate);
        $years = $diff->format("%y");
        $months = $diff->format("%m");
        return $years * 12 + $months;
    }

    public function getTranslatedAgeAttribute()
    {
        $birthday = new Carbon($this->examinee->birthday);
        $applicationDate = $this->application_date ? new Carbon($this->application_date) : Carbon::now();
        $diff = $birthday->diff($applicationDate);

        $years = $diff->format("%y");
        $months = $diff->format("%m");
        $days = $diff->format("%d");

        $age = '';
        if ($years) {
            $age .= $years . ' ' . __('Years');
        }

        if ($months) {
            $age .= ', ' . $months . ' ' . __('Months');
        }

        if ($days) {
            $age .= ', ' . $days . ' ' . __('Days');
        }

        return $age;
    }
}
