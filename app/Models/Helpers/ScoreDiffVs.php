<?php

namespace App\Models\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ScoreDiffVs extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'score_diff_vs';

    protected $fillable = [
        'score_diff',
        'nviq_nvm',
        'nvm_ps',
        'nviq_ps',
        'min_age',
        'max_age'
    ];
}
