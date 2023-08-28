<?php

namespace App\Models\Traits;

use App\Models\User;

trait HasExaminer
{
    public function examiner()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
