<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AbasAgeEqu extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "abas_age_equ";

    protected $fillable = [
        'age_equ',
        'score',
        'for',
        'type'
    ];
}
