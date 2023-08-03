<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ConfidenceInterval extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "confidence_interval";

    protected $fillable = [
        'nonverbal_iq',
        'low',
        'high'
    ];
}
