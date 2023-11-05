<?php

namespace App\Http\Controllers;

use App\Models\AbasExam;
use App\Services\AbasExamsService;
use Illuminate\Http\Request;

class AbasReportsController extends Controller
{
    private AbasExamsService $abasExamsService;

    public function __construct(
        AbasExamsService $abasExamsService
    ) {
        $this->abasExamsService = $abasExamsService;
    }

    public function actionIndex(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;
        $logo = $abasExam->examinee->center->logo ?? null;

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
        $logo = $abasExam->examinee->center->logo ?? null;
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
        $logo = $abasExam->examinee->center->logo ?? null;

        $examQuestionsResults = $this->abasExamsService->getExamQuestions($abasExam, true);

        return view('reports.abasv3', compact(
            'lang',
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
