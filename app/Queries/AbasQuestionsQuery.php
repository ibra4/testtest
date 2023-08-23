<?php

namespace App\Queries;

use App\Models\AbasQuestion;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class AbasQuestionsQuery
{
    /**
     * Constructs Abas Sub domains query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = AbasQuestion::select(
            'abas_questions.id',
            'abas_questions.name',
            'abas_questions.name_en',
            'abas_questions.abas_sub_domain_id',
            'abas_questions.created_at',
        );

        $query->leftJoin('abas_sub_domains', 'abas_questions.abas_sub_domain_id', '=', 'abas_sub_domains.id');

        if ($request->name) {
            $query->where([['abas_questions.name', 'LIKE', "%$request->name%"]]);
        }
        if ($request->name_en) {
            $query->where([['abas_questions.name', 'LIKE', "%$request->name_en%"]]);
        }
        if ($request->abas_sub_domain_id) {
            $query->where('abas_questions.abas_sub_domain_id', $request->abas_sub_domain_id);
        }

        return $query;
    }
}
