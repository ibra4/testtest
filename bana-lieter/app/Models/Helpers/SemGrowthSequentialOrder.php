<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SemGrowthSequentialOrder extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "sem_growth_sequential_order";

    protected $fillable = [
        'row_score',
        'growth',
        'sem'
    ];
}
