<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AbasComposite extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "abas_composite";

    protected $fillable = [
        'min_age',
        'max_age',
        'value',
        'std_score',
        'type',
        'for',
        'per_rank'
    ];
}
