<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['abas_sub_domain_id', 'name', 'name_en'];

    public function subDomain()
    {
        return $this->belongsTo(AbasSubDomain::class, 'abas_sub_domain_id', 'id');
    }
}
