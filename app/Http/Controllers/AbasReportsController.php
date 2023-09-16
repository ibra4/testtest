<?php

namespace App\Http\Controllers;

use App\Models\AbasExam;
use App\Services\GeneralReportsService;
use Illuminate\Http\Request;

class AbasReportsController extends Controller
{
    private GeneralReportsService $generalReportsService;

    public function __construct(GeneralReportsService $generalReportsService)
    {
        $this->generalReportsService = $generalReportsService;
    }

    public function actionIndex(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;

        $logo = $this->generalReportsService->getCenterLogo($abasExam->examiner);

        $examSubDomains = $abasExam->subDomains;
        $domains = [];
        foreach ($examSubDomains as $examSubDomain) {
            $subDomain = $examSubDomain->subDomain;
            if ($subDomain->domain) {
                $domains[$subDomain->domain->id] = $subDomain->domain;
            }
        }

        // I want to return view with abas report
        return view('reports.abas', compact('domains', 'abasExam', 'logo', 'examinee', 'report'));
    }
}
