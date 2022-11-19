<?php

namespace App\Models\Reports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAttention extends Model
{
    use HasFactory;

    protected $fillable = [
        'attention_sustained',
        'nonverbal_stroop_congruent_correct',
        'nonverbal_stroop_incongruent_correct'
    ];
}
