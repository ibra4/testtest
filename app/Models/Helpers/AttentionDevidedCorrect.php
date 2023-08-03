<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AttentionDevidedCorrect extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'attention_devided_correct';

    protected $fillable = [
        'row_score',
        'percentile',
        'scaled_score',
        'min_age',
        'max_age',
    ];
}
