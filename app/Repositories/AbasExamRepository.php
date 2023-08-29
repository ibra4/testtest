<?php

namespace App\Repositories;

use App\Models\AbasExam;

class AbasExamRepository
{
    public function createExam(array $params)
    {
        return AbasExam::create($params);
    }
    
    /**
     * @param int $id
     * @return AbasExam
     */
    public function getExamById(int $id)
    {
        return AbasExam::findOrFail($id);
    }
}
