<?php

namespace App\Models;

use App\Models\Traits\HasAgeAttribute;
use App\Models\Traits\HasExaminee;
use App\Models\Traits\HasExaminer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasdExam extends Model
{
    use HasFactory, HasAgeAttribute, HasExaminee, HasExaminer;

    protected $fillable = ['examinee_id', 'created_by', 'application_date', 'examiner_notes', 'is_saved'];

    public function subDomains()
    {
        return $this->hasMany(CasdExamSubDomain::class, 'casd_exam_id', 'id');
    }
}
