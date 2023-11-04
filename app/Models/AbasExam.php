<?php

namespace App\Models;

use App\Models\Reports\ReportInterface;
use App\Models\Traits\HasAgeAttribute;
use App\Models\Traits\HasExaminee;
use App\Models\Traits\HasExaminer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbasExam extends Model implements ReportInterface
{
    use HasFactory, HasAgeAttribute, HasExaminee, HasExaminer;

    protected $fillable = ['examinee_id', 'created_by', 'category', 'application_date', 'examiner_notes', 'is_saved_questions'];

    protected $casts = [
        'is_saved_questions' => 'bool',
    ];

    public function subDomains()
    {
        return $this->hasMany(AbasExamSubDomain::class, 'abas_exam_id', 'id');
    }
}
