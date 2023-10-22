<?php

namespace App\Http\Controllers;

use App\Models\AbasExam;
use App\Services\AbasExamsService;
use App\Services\GeneralReportsService;
use Illuminate\Http\Request;

class AbasReportsController extends Controller
{
    private GeneralReportsService $generalReportsService;

    private AbasExamsService $abasExamsService;

    public function __construct(
        GeneralReportsService $generalReportsService,
        AbasExamsService $abasExamsService
    ) {
        $this->generalReportsService = $generalReportsService;
        $this->abasExamsService = $abasExamsService;
    }

    public function actionIndex(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;
        $logo = $this->generalReportsService->getCenterLogo($abasExam->examiner);

        $examScaledScores = $this->abasExamsService->getSubDomainsScaledScores($abasExam->id);

        $domains = $this->abasExamsService->extrctDomainsFromExamScaledScores($abasExam->age, $abasExam->category, $examScaledScores);

        $totalScaledScore = $this->abasExamsService->getTotalScaledScore($examScaledScores);

        $subDomainsCounters = $this->abasExamsService->getExamSubdomainsResults($abasExam->id);

        return view('reports.abas', compact('examScaledScores', 'domains', 'totalScaledScore', 'subDomainsCounters', 'abasExam', 'logo', 'examinee', 'report'));
    }

    public function actionIndexV2(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;
        $logo = $this->generalReportsService->getCenterLogo($abasExam->examiner);
        $iq = collect(config("leiter.iq"));
        $examScaledScores = $this->abasExamsService->getSubDomainsScaledScores($abasExam->id);
        $sub_domains_composite = $examScaledScores->map(function ($subDomainScore) {
            return [
                'id' => $subDomainScore->abas_sub_domain_id,
                'label' => $subDomainScore->name,
                'value' => $subDomainScore->scaled_score
            ];
        })->values()->toArray();
        $withDomains = [];
        foreach ($examScaledScores as $subDomainScore) {
            $withDomains[$subDomainScore->domain_name][] = [
                'id' => $subDomainScore->abas_sub_domain_id,
                'label' => $subDomainScore->name,
                'value' => $subDomainScore->scaled_score
            ];
        }

        $domains = $this->abasExamsService->extrctDomainsFromExamScaledScores($abasExam->age, $abasExam->category, $examScaledScores);

        return view('reports.abasv2', compact(
            'report',
            'abasExam',
            'examinee',
            'logo',
            'iq',
            'sub_domains_composite',
            'withDomains'
        ));
    }
}
