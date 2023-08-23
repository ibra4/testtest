<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasSubDomainRequest;
use App\Models\AbasSubDomain;
use App\Queries\AbasSubDomainsQuery;
use Illuminate\Http\Request;

class AbasSubDomainsController extends Controller
{
    private $abasSubDomainsQuery;
    
    public function __construct(AbasSubDomainsQuery $abasSubDomainsQuery)
    {
        $this->abasSubDomainsQuery = $abasSubDomainsQuery;
    }
    
    public function actionIndex(Request $request)
    {
        $query = $this->abasSubDomainsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    public function actionGet($id)
    {
        return $this->sendSuccessReponse(AbasSubDomain::findOrFail($id));
    }

    public function actionCreate(AbasSubDomainRequest $request)
    {
        $domain = AbasSubDomain::create($request->all());
        return $this->sendSuccessReponse($domain);
    }

    public function actionUpdate(AbasSubDomainRequest $request, $id)
    {
        $domain = AbasSubDomain::findOrFail($id);
        $domain->update($request->all());

        return $this->sendSuccessReponse($domain);
    }
}
