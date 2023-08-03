<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PercentileRanksScaledScore extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'percentile_ranks_scaled_scores';

    protected $fillable = [
        'standard',
        'percentile',
        'normal_curve_scaled_score',
        'rank'
    ];
}
