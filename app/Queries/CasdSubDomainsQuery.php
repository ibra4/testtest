<?php

namespace App\Queries;

use App\Models\CasdSubDomain;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class CasdSubDomainsQuery
{
    /**
     * Constructs Casd Sub domains query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = CasdSubDomain::select(
            'casd_sub_domains.id',
            'casd_sub_domains.name',
            'casd_sub_domains.name_en',
            'casd_sub_domains.created_at',
        );

        if ($request->name) {
            $query->where([['casd_sub_domains.name', 'LIKE', "%$request->name%"]]);
        }
        if ($request->name_en) {
            $query->where([['casd_sub_domains.name_en', 'LIKE', "%$request->name_en%"]]);
        }

        return $query;
    }
}
