<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AttentionDevidedIncorrect extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'attention_devided_incorrect';

    protected $fillable = [
        'row_score',
        'percentile',
        'scaled_score',
        'min_age',
        'max_age',
    ];
}
