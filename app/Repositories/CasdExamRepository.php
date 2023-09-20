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

    /**
     * Set exam as saved
     * 
     * @param int $id
     * @return CasdExam
     */
    public function setExamSaved(int $id): CasdExam
    {
        $exam = $this->getExamById($id);
        $exam->is_saved = true;
        $exam->save();

        return $exam;
    }
}
