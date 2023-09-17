<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AbasScaledScore extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "abas_scaled_scores";

    protected $fillable = [
        'min_age',
        'max_age',
        'raw_score',
        'scaled_score',
        'sub_domain',
        'for',
    ];
}
