<?php

namespace App\Repositories;

use App\Models\CasdSubDomain;

class CasdSubDomainsRepository
{
    /**
     * @param string $category
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllSubDomains()
    {
        return CasdSubDomain::all();
    }
}
