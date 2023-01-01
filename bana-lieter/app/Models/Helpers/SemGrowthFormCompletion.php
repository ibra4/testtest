<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SemGrowthFormCompletion extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "sem_growth_form_completion";

    protected $fillable = [
        'row_score',
        'growth',
        'sem'
    ];
}
