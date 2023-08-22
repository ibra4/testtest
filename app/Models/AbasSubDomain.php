<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasSubDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en', 'abas_domain_id', 'for', 'min_age', 'max_age'];

    // protected $appends = ['detailed_name'];

    public function getDetailedNameAttribute()
    {
        $name = $this->name;
        $for = $this->for;
        $min_age = $this->min_age;
        $max_age = $this->max_age;
        return "$name $for $min_age to $max_age";
    }

    public function domain()
    {
        return $this->belongsTo(AbasDomain::class, 'abas_domain_id', 'id');
    }
}
