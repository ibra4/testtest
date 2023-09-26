<?php

namespace App\Repositories;

use App\Models\AbasExam;
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
            'abas_domains.name as domain_name',
            'abas_domains.id as domain_id',
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
}
