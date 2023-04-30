<?php

namespace App\Models\Reports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportSupplementalAttention extends Model
{
    use HasFactory;

    protected $fillable = [
        'attention_sustained_errors',
        'attention_divided_correct',
        'attention_divided_incorrect',
        'nonverbal_stroop_congruent_incorrect',
        'nonverbal_stroop_incongruent_incorrect',
        'file_en',
        'file_ar',
        'saved'
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

    public function getSavedAttribute($value)
    {
        return request()->user()->id == 1 ? false : $value;
    }
}
