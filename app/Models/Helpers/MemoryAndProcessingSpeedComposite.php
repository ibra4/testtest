<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MemoryAndProcessingSpeedComposite extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "memory_and_processing_speed_composites";

    protected $fillable = [
        'sum_of_scaled_score',
        'processing_speed',
        'composite_score'
    ];
}
