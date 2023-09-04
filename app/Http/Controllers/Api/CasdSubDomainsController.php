<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CasdSubDomainRequest;
use App\Models\CasdSubDomain;
use App\Queries\CasdSubDomainsQuery;
use Illuminate\Http\Request;

class CasdSubDomainsController extends Controller
{
    private $casdSubDomainsQuery;
    
    public function __construct(CasdSubDomainsQuery $casdSubDomainsQuery)
    {
        $this->casdSubDomainsQuery = $casdSubDomainsQuery;
    }
    
    public function actionIndex(Request $request)
    {
        $query = $this->casdSubDomainsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    public function actionGet($id)
    {
        return $this->sendSuccessReponse(CasdSubDomain::findOrFail($id));
    }

    public function actionCreate(CasdSubDomainRequest $request)
    {
        $domain = CasdSubDomain::create($request->all());
        return $this->sendSuccessReponse($domain);
    }

    public function actionUpdate(CasdSubDomainRequest $request, $id)
    {
        $domain = CasdSubDomain::findOrFail($id);
        $domain->update($request->all());

        return $this->sendSuccessReponse($domain);
    }
}
