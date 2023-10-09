<?php

namespace App\Services;

use App\Models\AbasScaledScore;

class AbasRecordsService
{
    public function __construct()
    {
    }

    /**
     * Ex: $category = 'parent_0_5'
     */
    public function getScaledScore(int $rawScore, $age, $forWho, $subDomainCode)
    {
        $abasScaledScore = AbasScaledScore::select('scaled_score')
            ->where('for', strtolower($forWho))
            ->where('raw_score', $rawScore)
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('sub_domain', strtolower($subDomainCode))
            ->get()->first();

        return $abasScaledScore->scaled_score ?? 'Not found';
    }

    /**
     * Check if age is allowed for the given category
     * 
     * @param int $age
     * @param string $category
     * @param string $subDomainCode
     * @return bool
     */
    public function isAgeAllowed(int $age, string $forWho, string $subDomainCode): bool
    {
        $abasScaledScore = AbasScaledScore::select('scaled_score')
            ->where('for', strtolower($forWho))
            ->where('sub_domain', strtolower($subDomainCode))
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->get()->first();

        return $abasScaledScore !== null;
    }
}
