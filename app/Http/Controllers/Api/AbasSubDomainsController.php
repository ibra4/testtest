<?php

namespace App\Http\Controllers\Api\Abas;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasSubDomainRequest;
use App\Models\AbasSubDomain;
use Illuminate\Http\Request;

class AbasSubDomainsController extends Controller
{
    public function actionIndex()
    {
        $this->sendSuccessReponse(AbasSubDomain::all());
    }

    public function actionCreate(AbasSubDomainRequest $request)
    {
        $domain = AbasSubDomain::create($request->all());
        $this->sendSuccessReponse($domain);
    }

    public function actionUpdate(AbasSubDomainRequest $request, $id)
    {
        $domain = AbasSubDomain::findOrFail($id);
        $domain->update($request->all());

        return $this->sendSuccessReponse($domain);
    }
}
