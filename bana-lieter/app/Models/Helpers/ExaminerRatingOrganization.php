<?php

namespace App\Models\Helpers;

use App\Models\Helpers\parents\ExaminerRatingRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExaminerRatingOrganization extends ExaminerRatingRecord
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'examiner_rating_organization';

    protected $fillable = [
        'row_score',
        'percentile',
        'scaled_score',
        'min_age',
        'max_age',
    ];
}