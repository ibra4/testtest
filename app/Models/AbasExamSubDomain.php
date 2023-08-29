<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasExamSubDomain extends Model
{
    use HasFactory;

    protected $fillable = [
        'abas_exam_id',
        'abas_sub_domain_id',
        'is_saved'
    ];
}
