<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasdQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['casd_sub_domain_id', 'name', 'name_en', 'question_number'];

    protected $appends = ['domain_full_name'];

    public function getDomainFullNameAttribute()
    {
        return $this->subDomain->name;
    }

    public function subDomain()
    {
        return $this->belongsTo(CasdSubDomain::class, 'casd_sub_domain_id', 'id');
    }
}
