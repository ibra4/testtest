<?php

namespace App\Repositories;

use App\Models\AbasExam;
use App\Models\AbasSubDomainQuestion;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class AbasExamRepository
{
    public function createExam(array $params)
    {
        return AbasExam::create($params);
    }

    /**
     * Get exam by id
     * 
     * @param int $id
     * @return AbasExam
     */
    public function getExamById(int $id)
    {
        return AbasExam::findOrFail($id);
    }

    /**
     * Get exam by id
     * 
     * @param int $id
     * @return \Illuminate\Support\Collection
     */
    public function getSubDomainsScaledScores(int $examId)
    {
        $questions = DB::table('abas_sub_domain_questions');
        $questions->select(
            'abas_sub_domains.name',
            'abas_sub_domains.code',
            'abas_sub_domains.id AS abas_sub_domain_id',
            'abas_domains.name as domain_name',
            'abas_domains.id as domain_id',
            'abas_domains.code as domain_code',
            DB::raw('COUNT(abas_sub_domain_questions.id) as total_questions'),
            DB::raw('SUM(abas_sub_domain_questions.result) as result'),
        );
        $questions->leftJoin('abas_exam_sub_domains', 'abas_sub_domain_questions.abas_exam_sub_domain_id', '=', 'abas_exam_sub_domains.id');
        $questions->leftJoin('abas_sub_domains', 'abas_exam_sub_domains.abas_sub_domain_id', '=', 'abas_sub_domains.id');
        $questions->leftJoin('abas_domains', 'abas_sub_domains.abas_domain_id', '=', 'abas_domains.id');
        $questions->where('abas_exam_sub_domains.abas_exam_id', '=', $examId);
        $questions->groupBy('abas_sub_domain_questions.abas_exam_sub_domain_id');

        return $questions->get();
    }

    /**
     * Gets exam subdomains results
     * 
     * @param int $examId
     * @return Collection
     */
    public function getExamSubdomainsResults(int $examId): Collection
    {
        $questions = DB::table('abas_sub_domain_questions');
        $questions->select(
            'abas_sub_domains.id as subdomain_id',
            'abas_sub_domains.name as subdomain_name',
            DB::raw('SUM(IF(abas_sub_domain_questions.guess = 1, 1, 0)) as number_of_guesses'),
            DB::raw('SUM(abas_sub_domain_questions.result) as sum_of_result'),
            DB::raw('SUM(IF(abas_sub_domain_questions.result = 0, 1, 0)) as number_of_zeros'),
        );

        $questions->leftJoin('abas_exam_sub_domains', 'abas_sub_domain_questions.abas_exam_sub_domain_id', '=', 'abas_exam_sub_domains.id');
        $questions->leftJoin('abas_sub_domains', 'abas_exam_sub_domains.abas_sub_domain_id', '=', 'abas_sub_domains.id');
        $questions->where('abas_exam_sub_domains.abas_exam_id', '=', $examId);
        $questions->groupBy('abas_sub_domain_questions.abas_exam_sub_domain_id');

        return $questions->get();
    }

    public function updateExamQuestions(AbasExam $exam, array $params)
    {
        foreach ($params as $paramItem) {
            $checked = [];
            $not_checked = [];

            foreach ($paramItem['questions'] as $question) {
                if ($question['show_in_report']) {
                    $checked[] = $question['id'];
                } else {
                    $not_checked[] = $question['id'];
                }
            }
            AbasSubDomainQuestion::whereIn('id', $checked)->update(['show_in_report' => true]);
            AbasSubDomainQuestion::whereIn('id', $not_checked)->update(['show_in_report' => false]);
        }
    }
}
