<?php

namespace App\Http\Controllers;

use App\Models\AbasExam;
use App\Services\AbasExamsService;
use App\Services\AbasRecordsService;
use App\Services\GeneralReportsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Question\Question;

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

        $examResults = $this->abasExamsService->getExamResults($abasExam->id);

        $domains = [];
        $sums = [];
        $totalScaledScore = 0;
        foreach ($examResults as $result) {
            if ($result->domain_id) {
                $domains[$result->domain_id] = [
                    'id' => $result->domain_id,
                    'name' => $result->domain_name,
                ];
            }
            if ($result->domain_id) {
                $sums[$result->domain_id][] = $result->scaled_score;
            }
            $totalScaledScore += $result->scaled_score;
        }


        return view('reports.abas', compact('examResults', 'sums', 'domains', 'totalScaledScore', 'abasExam', 'logo', 'examinee', 'report'));
    }
}
