<?php

namespace App\Services;

use App\Models\AbasAgeEqu;
use App\Models\AbasComposite;
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
     * Get equivelent age for the given raw score
     * 
     * @param int $rawScore
     * @param string $forWho
     * @param string $subDomainCode
     * @return string
     */
    public function getEquivalentAge(int $rawScore, string $forWho, string $subDomainCode): string
    {
        $abasScaledScore = AbasAgeEqu::select('age_equ')
            ->where('score', $rawScore)
            ->where('for', strtolower($forWho))
            ->where('type', strtolower($subDomainCode))
            ->get()->first();

        return $abasScaledScore->age_equ ?? 'Not found';
    }

    /**
     * Get compiste score and percentile for the given raw score
     * 
     * @param int $rawScore
     * @param int $age
     * @param string $forWho
     * @param string $subDomainCode
     * @return array
     */
    public function getCompisteAndPercentile(int $rawScore, int $age, string $forWho, string $subDomainCode): array
    {
        $abasComposite = AbasComposite::select('std_score', 'per_rank')
            ->where('for', strtolower($forWho))
            ->where('value', $rawScore)
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('type', strtoupper($subDomainCode))
            ->get()->first();
        if ($abasComposite) {
            return [
                'std_score' => $abasComposite->std_score,
                'per_rank' => $abasComposite->per_rank
            ];
        }

        return [
            'std_score' => 'Not found',
            'per_rank' => 'Not found'
        ];
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
