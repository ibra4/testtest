<?php

namespace App\Repositories;

use App\Models\Reports\ReportAttention;

class AttentionReportRepository
{
    /**
     * @return ReportAttention
     */
    public function createEmptyReport()
    {
        return ReportAttention::create([
            'attention_sustained' => 0,
            'nonverbal_stroop_congruent_correct' => 0,
            'nonverbal_stroop_incongruent_correct' => 0,
        ]);
    }
}
