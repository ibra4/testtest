<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['abas_sub_domain_id', 'name', 'name_en'];

    protected $appends = ['domain_full_name'];

    public function getDomainFullNameAttribute()
    {
        return $this->subDomain->name . ' - ' . $this->subDomain->category;
    }

    public function subDomain()
    {
        return $this->belongsTo(AbasSubDomain::class, 'abas_sub_domain_id', 'id');
    }
}
