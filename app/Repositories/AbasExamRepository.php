<?php

namespace App\Repositories;

use App\Models\AbasExam;

class AbasExamRepository
{
    public function createExam(array $params)
    {
        return AbasExam::create($params);
    }
}
