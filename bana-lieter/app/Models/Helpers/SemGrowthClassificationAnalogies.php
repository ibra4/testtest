<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SemGrowthClassificationAnalogies extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "sem_growth_classification_analogieis";

    protected $fillable = [
        'row_score',
        'growth',
        'sem'
    ];
}
