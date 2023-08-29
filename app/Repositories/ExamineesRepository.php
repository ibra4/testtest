<?php

namespace App\Repositories;

use App\Models\Examinee;

class ExamineesRepository
{
    /**
     * @param string $category
     * @return Examinee
     */
    public function getById(int $id)
    {
        return Examinee::findOrFail($id);
    }
}
