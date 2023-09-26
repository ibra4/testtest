<?php

namespace App\Repositories;

use App\Models\AbasSubDomain;
use App\Services\AbasRecordsService;
use Illuminate\Support\Collection;

class AbasSubDomainsRepository
{
    /**
     * @var AbasRecordsService
     */
    protected $abasRecordsService;

    public function __construct(AbasRecordsService $abasRecordsService)
    {
        $this->abasRecordsService = $abasRecordsService;
    }

    /**
     * @param string $category
     * @param int $age
     * @return Collection
     */
    public function getSubDomainsByCategory(string $category, int $age): Collection
    {
        $subDomains = AbasSubDomain::where('category', $category)->get();
        // Some subdomains don't have scaled scores for some ages
        // so we need to filter them out
        return $subDomains->filter(function ($subDomain) use ($age) {
            return $this->abasRecordsService->isAgeAllowed($age, $subDomain->category, $subDomain->code);
        });
    }
}
