<?php

namespace App\Repositories;

use App\Models\AbasExamSubDomain;
use App\Models\AbasSubDomainQuestion;
use Symfony\Component\Console\Question\Question;

class AbasExamSubDomainsRepository
{
    /**
     * @param Collection $subDomains
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function createExamSubdomainsAndQuestions(int $examId, $subDomains)
    {
        foreach ($subDomains as $subDomain) {
            $examSubDomain = AbasExamSubDomain::create([
                'abas_exam_id' => $examId,
                'abas_sub_domain_id' => $subDomain->id,
                'is_saved' => false
            ]);
            foreach ($subDomain->questions as $question) {
                AbasSubDomainQuestion::create([
                    'abas_exam_sub_domain_id' => $examSubDomain->id,
                    'abas_question_id' => $question->id,
                    'result' => 0,
                    'guess' => false
                ]);
            }
        }
    }

    /**
     * @param int $id
     * @return AbasExamSubDomain
     */
    public function updateAnswers(int $id, array $questions): AbasExamSubDomain
    {
        $questions = array_map(function ($q) {
            unset($q['title']);
            return $q;
        }, $questions);

        /** @var AbasExamSubDomain $examSubDomain */
        $examSubDomain = AbasExamSubDomain::findOrFail($id);

        // Update questions
        foreach ($questions as $questionData) {
            /** @var AbasSubDomainQuestion $question */
            $question = $examSubDomain->questions()->find($questionData['id']);
            unset($questionData['id']);
            $question->update($questionData);
        }

        // Exam saved
        $examSubDomain->update(['is_saved' => true]);

        return $examSubDomain;
    }
}
