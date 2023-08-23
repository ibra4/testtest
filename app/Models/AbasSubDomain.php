<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasSubDomain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'name_en', 'abas_domain_id', 'category'];

    public function domain()
    {
        return $this->belongsTo(AbasDomain::class, 'abas_domain_id', 'id');
    }

    public function getCategoryAttribute($value)
    {
        return __($value);
    }
}
