<?php

namespace App\Queries;

use App\Models\CasdQuestion;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class CasdQuestionsQuery
{
    /**
     * Constructs Casd Sub domains query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = CasdQuestion::select(
            'casd_questions.id',
            'casd_questions.name',
            'casd_questions.name_en',
            'casd_questions.casd_sub_domain_id',
            'casd_questions.question_number',
            'casd_questions.created_at',
        );

        $query->leftJoin('casd_sub_domains', 'casd_questions.casd_sub_domain_id', '=', 'casd_sub_domains.id');

        if ($request->name) {
            $query->where([['casd_questions.name', 'LIKE', "%$request->name%"]]);
        }
        if ($request->name_en) {
            $query->where([['casd_questions.name_en', 'LIKE', "%$request->name_en%"]]);
        }
        if ($request->casd_sub_domain_id) {
            $query->where('casd_questions.casd_sub_domain_id', $request->casd_sub_domain_id);
        }

        return $query;
    }
}
