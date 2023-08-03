<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SemGrowthNonverbalIQ extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "sem_growth_nonverbal_iq";

    protected $fillable = [
        'row_score',
        'growth',
        'sem'
    ];
}
