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
        foreach ($casdExam->subDomains as $subDomain) {
            $checkedQuestions = $subDomain->questions()->where('checked', true)->get();
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
        
        return view('reports.casd', compact('casdExam', 'report', 'examinee', 'logo', 'appliedSubDomains', 'notAppliedSubDomains'));
    }

}
