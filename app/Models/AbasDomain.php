<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en', 'code'];

    public function subdomains()
    {
        return $this->hasMany(AbasSubDomain::class);
    }
}
