<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ConfidenceIntervalNonverbalMemory extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "confidence_interval_nonverbal_memory";

    protected $fillable = [
        'composite_score',
        'low',
        'high'
    ];
}
