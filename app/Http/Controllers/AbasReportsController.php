<?php

namespace App\Http\Controllers;

use App\Models\AbasExam;
use Illuminate\Http\Request;

class AbasReportsController extends Controller
{
    public function actionIndex(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = AbasExam::findOrFail($id);
        $examSubDomains = $abasExam->subDomains;
        $domains = [];
        foreach ($examSubDomains as $examSubDomain) {
            $subDomain = $examSubDomain->subDomain;
            if ($subDomain->domain) {
                $domains[$subDomain->domain->id] = $subDomain->domain;
            }
        }

        // I want to return view with abas report
        return view('reports.abas', ['domains' => $domains, 'abasExam' => $abasExam]);
    }
}
