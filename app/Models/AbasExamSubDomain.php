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

    public function questions()
    {
        return $this->hasMany(AbasSubDomainQuestion::class, 'abas_exam_sub_domain_id', 'id');
    }

    public function subDomain()
    {
        return $this->belongsTo(AbasSubDomain::class, 'abas_sub_domain_id', 'id');
    }
}
