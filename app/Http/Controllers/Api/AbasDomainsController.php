<?php

namespace App\Http\Controllers\Api\Abas;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasDomainRequest;
use App\Models\AbasDomain;
use Illuminate\Http\Request;

class AbasDomainsController extends Controller
{
    public function actionIndex()
    {
        $this->sendSuccessReponse(AbasDomain::all());
    }

    public function actionCreate(AbasDomainRequest $request)
    {
        $domain = AbasDomain::create($request->all());
        $this->sendSuccessReponse($domain);
    }

    public function actionUpdate(AbasDomainRequest $request, $id)
    {
        $domain = AbasDomain::findOrFail($id);
        $domain->update($request->all());

        return $this->sendSuccessReponse($domain);
    }
}
