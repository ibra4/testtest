<?php

namespace App\Queries;

use App\Models\AbasSubDomain;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class AbasSubDomainsQuery
{
    /**
     * Constructs Abas Sub domains query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = AbasSubDomain::select(
            'abas_sub_domains.id',
            'abas_sub_domains.name',
            'abas_sub_domains.name_en',
            'abas_sub_domains.category',
            'abas_domains.name as domainname',
            'abas_sub_domains.created_at',
        );

        $query->leftJoin('abas_domains', 'abas_sub_domains.abas_domain_id', '=', 'abas_domains.id');

        if ($request->name) {
            $query->where([['abas_sub_domains.name', 'LIKE', "%$request->name%"]]);
        }
        if ($request->name_en) {
            $query->where([['abas_sub_domains.name', 'LIKE', "%$request->name_en%"]]);
        }
        if ($request->category) {
            $query->where('abas_sub_domains.category', $request->category);
        }
        if ($request->abas_domain_id) {
            $query->where('abas_sub_domains.abas_domain_id', $request->abas_domain_id);
        }

        return $query;
    }
}
