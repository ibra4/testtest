<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CasdDomainRequest;
use App\Models\CasdDomain;
use Illuminate\Http\Request;

class CasdDomainsController extends Controller
{
    public function actionIndex()
    {
        return $this->sendSuccessReponse(CasdDomain::all());
    }

    public function actionGet($id)
    {
        return $this->sendSuccessReponse(CasdDomain::findOrFail($id));
    }
    
    public function actionCreate(CasdDomainRequest $request)
    {
        $domain = CasdDomain::create($request->all());
        return $this->sendSuccessReponse($domain);
    }

    public function actionUpdate(CasdDomainRequest $request, $id)
    {
        $domain = CasdDomain::findOrFail($id);
        $domain->update($request->all());

        return $this->sendSuccessReponse($domain);
    }
}
