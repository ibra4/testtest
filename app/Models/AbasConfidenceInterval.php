<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AbasConfidenceInterval extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "abas_confidence_interval";

    protected $fillable = [
        'confidence',
        'age',
        'for',
        'type'
    ];
}
