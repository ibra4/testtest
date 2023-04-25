<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class GrowthScaleAgeEquivalentsMemoryGrowthScale extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'growth_scale_age_equivalents_memory_growth_scale';

    protected $fillable = [
        'years',
        'months',
        'growth_score',
    ];
}
