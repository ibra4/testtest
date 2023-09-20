<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasdExamSubDomain extends Model
{
    use HasFactory;

    protected $fillable = [
        'casd_exam_id',
        'casd_sub_domain_id'
    ];

    public function questions()
    {
        return $this->hasMany(CasdSubDomainQuestion::class, 'casd_exam_sub_domain_id', 'id');
    }

    public function subDomain()
    {
        return $this->belongsTo(CasdSubDomain::class, 'casd_sub_domain_id', 'id');
    }

    public function exam()
    {
        return $this->belongsTo(CasdExam::class, 'casd_exam_id', 'id');
    }
}
