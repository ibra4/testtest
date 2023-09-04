<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasdSubDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en', 'casd_domain_id'];

    public function domain()
    {
        return $this->belongsTo(CasdDomain::class, 'casd_domain_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(CasdQuestion::class, 'casd_sub_domain_id', 'id');
    }
}