<?php

namespace App\Models\Reports;

use App\Models\interfaces\SubReportInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportAttention extends Model
{
    use HasFactory;

    protected $fillable = [
        'attention_sustained',
        'nonverbal_stroop_congruent_correct',
        'nonverbal_stroop_incongruent_correct',
        'file_en',
        'file_ar'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'updated_at' => 'datetime:d/m/Y - H:i:s',
        'created_at' => 'datetime:d/m/Y - H:i:s',
    ];
}
