<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class LeiterRecord extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "tables";

    protected $fillable = [
        'min_age',
        'max_age',
        'value',
        'scaled_score',
        'type',
    ];
}
