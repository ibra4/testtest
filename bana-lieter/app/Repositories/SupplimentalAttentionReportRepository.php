<?php

namespace App\Repositories;

use App\Models\Reports\ReportSupplementalAttention;

class SupplimentalAttentionReportRepository
{
    /**
     * @return ReportSupplementalAttention
     */
    public function createEmptyReport()
    {
        return ReportSupplementalAttention::create([
            'attention_sustained_errors' => 0,
            'attention_divided_correct' => 0,
            'attention_divided_incorrect' => 0,
            'nonverbal_stroop_congruent_incorrect' => 0,
            'nonverbal_stroop_incongruent_incorrect' => 0,
        ]);
    }
}
