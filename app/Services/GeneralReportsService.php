<?php

namespace App\Services;

use App\Models\User;

class GeneralReportsService
{    
    /**
     * Gets center logo
     *
     * @param User $examiner
     * @return string|null
     */
    public function getCenterLogo(User $examiner)
    {
        if ($examiner->hasRole('sub_admin')) {
            $center = $examiner->admin;
        } else if ($examiner->hasRole('admin')) {
            $center = $examiner;
        }

        return $center->logo ?? null;
    }
}
