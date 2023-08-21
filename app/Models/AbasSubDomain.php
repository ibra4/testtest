<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasSubDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en', 'abas_domain_id', 'for', 'min_age', 'max_age'];

    public function domain()
    {
        return $this->hasMany(AbasDomain::class);
    }
}
