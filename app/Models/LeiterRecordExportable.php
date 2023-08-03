<?php

namespace App\Models;

class LeiterRecordExportable extends LeiterRecord
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'scaled_score' => 'string',
        'value' => 'string',
        'min_age' => 'string',
        'max_age' => 'string',
    ];
}
