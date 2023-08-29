<?php

namespace App\Repositories;

use App\Models\AbasSubDomain;

class AbasSubDomainsRepository
{
    /**
     * @param string $category
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getSubDomainsByCategory(string $category)
    {
        return AbasSubDomain::where('category', $category)->get();
    }
}
