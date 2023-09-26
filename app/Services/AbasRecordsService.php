<?php

namespace App\Services;

use App\Enums\AbasExamTypesEnum;
use App\Models\AbasScaledScore;

class AbasRecordsService
{
    public function __construct()
    {
    }

    /**
     * Ex: $category = 'parent_0_5'
     */
    public function getScaledScore(int $rawScore, $age,  $category, $subDomainCode)
    {
        $forWho = AbasExamTypesEnum::getForWho($category);
        $abasScaledScore = AbasScaledScore::select('scaled_score')
            ->where('for', strtolower($forWho))
            ->where('raw_score', $rawScore)
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('sub_domain', strtolower($subDomainCode))
            ->get()->first();

        return $abasScaledScore->scaled_score ?? 'Not found';
    }
}
