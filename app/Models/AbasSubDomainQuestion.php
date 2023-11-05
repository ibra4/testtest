<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasSubDomainQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'abas_exam_sub_domain_id',
        'abas_question_id',
        'result',
        'guess',
        'question_number',
        'show_in_report'
    ];

    public function question()
    {
        return $this->belongsTo(AbasQuestion::class, 'abas_question_id', 'id');
    }
}
