<?php

namespace App\Repositories;

use App\Models\CasdExam;
use App\Models\CasdExamSubDomain;
use App\Models\CasdSubDomainQuestion;

class CasdExamSubDomainsRepository
{
    /**
     * @param Collection $subDomains
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function createExamSubdomainsAndQuestions(int $examId, $subDomains)
    {
        foreach ($subDomains as $subDomain) {
            $examSubDomain = CasdExamSubDomain::create([
                'casd_exam_id' => $examId,
                'casd_sub_domain_id' => $subDomain->id,
                'is_saved' => false
            ]);
            foreach ($subDomain->questions as $question) {
                CasdSubDomainQuestion::create([
                    'casd_exam_sub_domain_id' => $examSubDomain->id,
                    'casd_question_id' => $question->id,
                    'checked' => false
                ]);
            }
        }
    }

    /**
     * @param array $questions
     * @return void
     */
    public function updateAnswers(array $questions): void
    {
        foreach ($questions as $questionData) {
            /** @var CasdSubDomainQuestion $question */
            $question = CasdSubDomainQuestion::findOrFail($questionData['id']);
            $question->checked = $questionData['checked'];
            $question->save();
        }
    }
}
