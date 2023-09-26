<?php

namespace App\Http\Controllers;

use App\Models\AbasExam;
use App\Services\AbasExamsService;
use App\Services\AbasRecordsService;
use App\Services\GeneralReportsService;
use Illuminate\Http\Request;

class AbasReportsController extends Controller
{
    private GeneralReportsService $generalReportsService;

    // @TODO Remove if it's not used
    private AbasRecordsService $abasRecordsService;

    private AbasExamsService $abasExamsService;

    public function __construct(
        GeneralReportsService $generalReportsService,
        AbasRecordsService $abasRecordsService,
        AbasExamsService $abasExamsService
    ) {
        $this->generalReportsService = $generalReportsService;
        $this->abasRecordsService = $abasRecordsService;
        $this->abasExamsService = $abasExamsService;
    }

    public function actionIndex(Request $request, $lang, $id)
    {
        app()->setLocale($lang);
        $abasExam = $report = AbasExam::findOrFail($id);
        $examinee = $abasExam->examinee;
        $logo = $this->generalReportsService->getCenterLogo($abasExam->examiner);

        $examScaledScores = $this->abasExamsService->getSubDomainsScaledScores($abasExam->id);

        $domains = $this->abasExamsService->extrctDomainsFromExamScaledScores($examScaledScores);

        $totalScaledScore = $this->abasExamsService->getTotalScaledScore($examScaledScores);

        return view('reports.abas', compact('examScaledScores', 'domains', 'totalScaledScore', 'abasExam', 'logo', 'examinee', 'report'));
    }
}
