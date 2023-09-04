<?php

namespace App\Repositories;

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
     * @param int $id
     * @return CasdExamSubDomain
     */
    public function updateAnswers(int $id, array $questions): CasdExamSubDomain
    {
        $questions = array_map(function ($q) {
            unset($q['title']);
            return $q;
        }, $questions);

        /** @var CasdExamSubDomain $examSubDomain */
        $examSubDomain = CasdExamSubDomain::findOrFail($id);

        // Update questions
        foreach ($questions as $questionData) {
            /** @var CasdSubDomainQuestion $question */
            $question = $examSubDomain->questions()->find($questionData['id']);
            unset($questionData['id']);
            $question->update($questionData);
        }

        // Exam saved
        $examSubDomain->update(['is_saved' => true]);

        return $examSubDomain;
    }
}
