<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasSubDomainRequest;
use App\Http\Resources\AbasSubDomainResource;
use App\Models\AbasSubDomain;

class AbasSubDomainsController extends Controller
{
    public function actionIndex()
    {
        return $this->sendSuccessReponse(AbasSubDomainResource::collection(AbasSubDomain::all()));
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
