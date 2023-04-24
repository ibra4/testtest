<?php

namespace App\Http\Controllers;

use App\Models\Examinee;
use App\Models\Helpers\ExaminerRatingAttention;
use App\Models\Helpers\ExaminerRatingEmotion;
use App\Models\Helpers\ExaminerRatingEnergy;
use App\Models\Helpers\ExaminerRatingOrganization;
use App\Models\Helpers\ExaminerRatingSocial;
use App\Models\Helpers\SemGrowthClassificationAnalogies;
use App\Models\Helpers\SemGrowthFigureGround;
use App\Models\Helpers\SemGrowthFormCompletion;
use App\Models\Helpers\SemGrowthForwardMemory;
use App\Models\Helpers\SemGrowthNonverbalIQ;
use App\Models\Helpers\SemGrowthNonverbalMemory;
use App\Models\Helpers\SemGrowthReverseMemory;
use App\Models\Helpers\SemGrowthSequentialOrder;
use App\Models\Helpers\SemGrowthVisualPatterns;
use App\Services\LeiterRecordsService;
use Illuminate\Http\Request;
use stdClass;

class ReportsController extends Controller
{
    public function index(Request $request, LeiterRecordsService $lrs, $id)
    {
        $examinee = Examinee::findOrFail($id);

        $age = $examinee->age;

        $reportCognitive = $examinee->report->reportCognitive;
        $reportMemory = $examinee->report->reportMemory;
        $reportAttention = $examinee->report->reportAttention;
        $reportAttention->nonverbal_stroop_effect =
            abs($reportAttention->nonverbal_stroop_incongruent_correct -
                $reportAttention->nonverbal_stroop_congruent_correct);
        $reportExaminer = $examinee->report->reportExaminer;

        // @TODO: missing Nonverbal Stroop Effect

        $attentionAnonymous = new stdClass();
        $attentionAnonymous->attention_sustained_error = 0;
        $attentionAnonymous->attention_devided_correct = 0;
        $attentionAnonymous->attention_devided_incorrect = 0;
        $attentionAnonymous->nonverbal_stroop_congruent_incorrect = 0;
        $attentionAnonymous->nonverbal_stroop_incongruent_incorrect = 0;

        /**
         * Cognitive
         */
        $cognitive_values = [
            'fg' => $lrs->getScaledScore('figure_ground', $reportCognitive->figure_ground, $age),
            'fc' => $lrs->getScaledScore('form_completion', $reportCognitive->form_completion, $age),
            'ca' => $lrs->getScaledScore('classification_analogies', $reportCognitive->classification_analogies, $age),
            'so' => $lrs->getScaledScore('sequential_order', $reportCognitive->sequential_order, $age),
            'vp' => $lrs->getScaledScore('visual_patterns', $reportCognitive->visual_patterns, $age)
        ];
        $cognitive_values_percentile = [
            'fg' => $lrs->getCognitinvePercentile($cognitive_values['fg']),
            'fc' => $lrs->getCognitinvePercentile($cognitive_values['fc']),
            'ca' => $lrs->getCognitinvePercentile($cognitive_values['ca']),
            'so' => $lrs->getCognitinvePercentile($cognitive_values['so']),
            'vp' => $lrs->getCognitinvePercentile($cognitive_values['vp'])
        ];
        $sum_of_cognitive = $lrs->getSumOfCognitive($cognitive_values);
        $nonverbal_iq = $lrs->getNonverbalIq($sum_of_cognitive);
        $nonverbal_iq_percentile = $lrs->getNonverbalIqPercentile($nonverbal_iq);
        $confidence_interval_cognitive = $lrs->getConfidenceIntervalCognitive($nonverbal_iq);

        /**
         * Attention/Memory
         */
        $memory_attention_values = [
            'as' => $lrs->getScaledScore('attention', $reportAttention->attention_sustained, $age),
            'fm' => $lrs->getScaledScore('forward_memory', $reportMemory->forward_memory, $age),
            'rm' => $lrs->getScaledScore('reverse_memory', $reportMemory->reverse_memory, $age),
            'as' => $lrs->getScaledScore('attention', $reportAttention->attention_sustained, $age),
            'nsic' => $lrs->getScaledScore('nonverbal_stroop_incongruent_correct', $reportAttention->nonverbal_stroop_incongruent_correct, $age),
            'nscc' => $lrs->getScaledScore('nonverbal_stroop_congruent_correct', $reportAttention->nonverbal_stroop_congruent_correct, $age),
            'nseff' => "Missing table"
        ];

        $sum_of_nonverbal_memory = $lrs->getSumOfNonverbalMemory($memory_attention_values);
        $composite_nonverbal_memory = $lrs->getCompositeMemory($sum_of_nonverbal_memory);
        $confidence_interval_noverbal_memory = $lrs->getConfidenceIntervalNonverbalMemory($composite_nonverbal_memory);

        $sum_of_processing_speed = $lrs->getSumOfProcessingSpeed($memory_attention_values);
        $composite_processing_speed = $lrs->getCompositeProcessingSpeed($sum_of_processing_speed);
        $confidence_interval_processing_speed = $lrs->getConfidenceIntervalProcessingSpeed($composite_processing_speed);

        $attention_anonymous_values = [
            'ase' => $lrs->getAttentionScaledScore('attention_sustained_error', $attentionAnonymous, $age),
            'adc' => $lrs->getAttentionScaledScore('attention_devided_correct', $attentionAnonymous, $age),
            'adi' => $lrs->getAttentionScaledScore('attention_devided_incorrect', $attentionAnonymous, $age),
            'nsci' => $lrs->getAttentionScaledScore('nonverbal_stroop_congruent_incorrect', $attentionAnonymous, $age),
            'nsii' => $lrs->getAttentionScaledScore('nonverbal_stroop_incongruent_incorrect', $attentionAnonymous, $age)
        ];

        $examiner_section_ad_sum = $reportExaminer->attention +
            $reportExaminer->organization_impulse_control +
            $reportExaminer->activity_level +
            $reportExaminer->sociability;

        $examiner_section_eh_sum = $reportExaminer->energy_and_feelings +
            $reportExaminer->regulation +
            $reportExaminer->anxiety +
            $reportExaminer->sensory_reaction;

        $examiner_scores = [
            'attention' => $lrs->getExaminerScaledScore(
                ExaminerRatingAttention::class,
                $reportExaminer->attention,
                $age
            ),
            'organization' => $lrs->getExaminerScaledScore(
                ExaminerRatingOrganization::class,
                $reportExaminer->organization_impulse_control,
                $age
            ),
            'social' => $lrs->getExaminerScaledScore(
                ExaminerRatingSocial::class,
                $examiner_section_ad_sum,
                $age
            ),
            'energy' => $lrs->getExaminerScaledScore(
                ExaminerRatingEnergy::class,
                $reportExaminer->energy_and_feelings,
                $age
            ),
            'emotions' => $lrs->getExaminerScaledScore(
                ExaminerRatingEmotion::class,
                $examiner_section_eh_sum,
                $age
            ),
        ];

        $sem_growth = [
            'nonverbal_iq' => $lrs->getSemGrowth(
                SemGrowthNonverbalIQ::class,
                $nonverbal_iq
            ),
            'figure_ground' => $lrs->getSemGrowth(
                SemGrowthFigureGround::class,
                $reportCognitive->figure_ground
            ),
            'form_completion' => $lrs->getSemGrowth(
                SemGrowthFormCompletion::class,
                $reportCognitive->form_completion
            ),
            'classification_analogies' => $lrs->getSemGrowth(
                SemGrowthClassificationAnalogies::class,
                $reportCognitive->classification_analogies
            ),
            'sequential_order' => $lrs->getSemGrowth(
                SemGrowthSequentialOrder::class,
                $reportCognitive->sequential_order
            ),
            'visual_patterns' => $lrs->getSemGrowth(
                SemGrowthVisualPatterns::class,
                $reportCognitive->visual_patterns
            ),
            'nonverbal_memory' => $lrs->getSemGrowth(
                SemGrowthNonverbalMemory::class,
                $sum_of_nonverbal_memory
            ),
            'forward_memory' => $lrs->getSemGrowth(
                SemGrowthForwardMemory::class,
                $reportMemory->forward_memory
            ),
            'reverse_memory' => $lrs->getSemGrowth(
                SemGrowthReverseMemory::class,
                $reportMemory->reverse_memory
            ),
        ];

        $vs = config('leiter')['vs'];

        $diffs = [
            'nonverbal_iq_vs_nonverbal_memory' => $nonverbal_iq - $composite_nonverbal_memory,
            'nonverbal_iq_vs_processing_speed' => $nonverbal_iq - $composite_processing_speed,
            'nonverbal_memory_vs_processing_speed' => $composite_nonverbal_memory - $composite_processing_speed,
        ];

        return view('pdf')->with(compact(
            // Examinee Data
            'examinee',

            // Cognitive
            'reportCognitive',
            'cognitive_values',
            'cognitive_values_percentile',
            'sum_of_cognitive',
            'nonverbal_iq',
            'nonverbal_iq_percentile',
            'confidence_interval_cognitive',

            // Memory
            'reportMemory',
            'reportAttention',
            'memory_attention_values',
            'sum_of_nonverbal_memory',
            'sum_of_processing_speed',
            'composite_nonverbal_memory',
            'composite_processing_speed',
            'confidence_interval_noverbal_memory',
            'confidence_interval_processing_speed',

            // Attention Anonymous
            'attentionAnonymous',
            'attention_anonymous_values',

            // Examiner
            'reportExaminer',
            'examiner_scores',
            'examiner_section_ad_sum',
            'examiner_section_eh_sum',

            'sem_growth',
            'vs',
            'diffs'
        ));
    }
}
