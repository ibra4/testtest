<?php

namespace App\Repositories;

use App\Models\CasdExam;

class CasdExamRepository
{
    public function createExam(array $params)
    {
        return CasdExam::create($params);
    }
    
    /**
     * @param int $id
     * @return CasdExam
     */
    public function getExamById(int $id)
    {
        return CasdExam::findOrFail($id);
    }
}
