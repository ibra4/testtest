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

        $subDomainsCounters = $this->abasExamsService->getExamSubdomainsResults($abasExam->id);

        return view('reports.abas', compact('examScaledScores', 'domains', 'subDomainsCounters', 'abasExam', 'logo', 'examinee', 'report'));
    }

    public function actionIndexV2(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;
        $logo = $this->generalReportsService->getCenterLogo($abasExam->examiner);
        $iq = collect(config("abas.iq"));
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
        $domains_composite = $domains->map(function ($item) {
            return [
                'id' => $item['domain_code'] ?? 'GAC',
                'label' => $item['name'],
                'value' => $item['composite']['std_score']
            ];
        });

        return view('reports.abasv2', compact(
            'report',
            'abasExam',
            'examinee',
            'logo',
            'iq',
            'sub_domains_composite',
            'withDomains',
            'domains_composite'
        ));
    }

    public function actionIndexV3(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;
        $logo = $this->generalReportsService->getCenterLogo($abasExam->examiner);

        $examQuestionsResults = $this->abasExamsService->getExamQuestions($abasExam);
        
        return view('reports.abasv3', compact(
            'report',
            'abasExam',
            'examinee',
            'logo',
            'examQuestionsResults'
            // 'iq',
            // 'sub_domains_composite',
            // 'withDomains',
            // 'domains_composite'
        ));
    }
}
