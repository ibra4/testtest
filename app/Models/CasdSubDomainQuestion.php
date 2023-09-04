<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasdSubDomainQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'casd_exam_sub_domain_id',
        'casd_question_id',
        'checked'
    ];

    public function question()
    {
        return $this->belongsTo(CasdQuestion::class, 'casd_question_id', 'id');
    }
}
