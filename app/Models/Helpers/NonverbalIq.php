<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class NonverbalIq extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = "nonverbal_iq";

    protected $fillable = [
        'sum_of_scaled_score',
        'value'
    ];
}
