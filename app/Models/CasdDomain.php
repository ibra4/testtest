<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasdDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en'];

    public function subdomains()
    {
        return $this->hasMany(CasdSubDomain::class);
    }
}
