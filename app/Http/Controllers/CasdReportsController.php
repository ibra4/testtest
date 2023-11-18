<?php

namespace App\Http\Controllers;

use App\Http\Resources\CasdExamFullResource;
use App\Services\CasdExamsService;
use Illuminate\Http\Request;

class CasdReportsController extends Controller
{
    private CasdExamsService $casdExamsService;

    public function __construct(
        CasdExamsService $casdExamsService
    ) {
        $this->casdExamsService = $casdExamsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param string $lang
     * @param string $id
     * @return \Illuminate\Contracts\View\View
     */
    public function actionIndex(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $casdExam = $report = $this->casdExamsService->getExam($id);
        $examinee = $casdExam->examinee;
        $logo = $casdExam->examinee->center->logo ?? null;


        $appliedSubDomains = [];
        $notAppliedSubDomains = [];
        $count = 0;
        foreach ($casdExam->subDomains as $subDomain) {
            $checkedQuestions = $subDomain->questions()->where('checked', true)->get();
            $count += $checkedQuestions->count();
            $notCheckedQuestions = $subDomain->questions()->where('checked', false)->get();
            if (!$checkedQuestions->isEmpty()) {
                $appliedSubDomains[] = [
                    'sub_domain' => $subDomain,
                    'questions' => $checkedQuestions
                ];
            }
            if (!$notCheckedQuestions->isEmpty()) {
                $notAppliedSubDomains[] = [
                    'sub_domain' => $subDomain,
                    'questions' => $notCheckedQuestions
                ];
            }
        }
        
        return view('reports.casd', compact('casdExam', 'report', 'examinee', 'logo', 'appliedSubDomains', 'notAppliedSubDomains', 'count'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param string $lang
     * @param string $id
     * @return \Illuminate\Contracts\View\View
     */
    public function actionIndex2(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $casdExam = $report = $this->casdExamsService->getExam($id);
        $examinee = $casdExam->examinee;
        $logo = $casdExam->examinee->center->logo ?? null;

        $count = 0;
        $notCount = 0;
        $subDomainsResults = [];
        foreach ($casdExam->subDomains as $subDomain) {
            $checkedQuestionsCount = $subDomain->questions()->where('checked', true)->count();
            $allQuuestionsCount = $subDomain->questions->count();
            $subDomainsResults['domains_names'][] = $subDomain->subDomain->{$lang == 'ar' ? 'name' : 'name_en'};
            $subDomainsResults['remaining_results'][] = $allQuuestionsCount - $checkedQuestionsCount;
            $subDomainsResults['real_results'][] = $checkedQuestionsCount;
            $count += $checkedQuestionsCount;
            $notCount += ($allQuuestionsCount - $checkedQuestionsCount);
        }

        $symptom = collect(config('casd.symptom'));
        
        return view('reports.casd2', compact('casdExam', 'report', 'examinee', 'logo', 'count', 'notCount', 'subDomainsResults', 'symptom'));
    }
}
