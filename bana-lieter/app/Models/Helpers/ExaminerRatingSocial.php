<?php

namespace App\Models\Helpers;

use App\Models\Helpers\parents\ExaminerRatingRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExaminerRatingSocial extends ExaminerRatingRecord
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'examiner_rating_social';

    protected $fillable = [
        'row_score',
        'scaled_score',
        'min_age',
        'max_age',
    ];
}
