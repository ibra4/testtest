<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasExamQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'abas_exam_id',
        'abas_question_id',
        'result',
        'guess'
    ];
}
