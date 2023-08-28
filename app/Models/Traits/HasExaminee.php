<?php

namespace App\Models\Traits;

use App\Models\Examinee;

trait HasExaminee
{
    public function getExamineenameAttribute($value)
    {
        $currentUser = request()->user();
        switch ($currentUser->role) {
            case 'root':
            case 'sub_admin':
                $show = $this->examinee->created_by == $currentUser->id;
                break;
            case 'admin':
                $show = $this->examinee->admin_id == $currentUser->id;
                break;
            default:
                $show = false;
        }

        return $show ? $value : '*******';
    }

    public function examinee()
    {
        return $this->belongsTo(Examinee::class, 'examinee_id', 'id');
    }
}
