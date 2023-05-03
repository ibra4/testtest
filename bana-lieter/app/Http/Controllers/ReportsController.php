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
        $reportSupplementalAttention = $examinee->report->reportSupplementalAttention;

        $reportAttention->nonverbal_stroop_effect =
            abs($reportAttention->nonverbal_stroop_incongruent_correct -
                $reportAttention->nonverbal_stroop_congruent_correct);
        $reportExaminer = $examinee->report->reportExaminer;

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
            'fg' => $lrs->getPercentileFromRank($cognitive_values['fg']),
            'fc' => $lrs->getPercentileFromRank($cognitive_values['fc']),
            'ca' => $lrs->getPercentileFromRank($cognitive_values['ca']),
            'so' => $lrs->getPercentileFromRank($cognitive_values['so']),
            'vp' => $lrs->getPercentileFromRank($cognitive_values['vp'])
        ];
        $sum_of_cognitive = $lrs->getSumOfCognitive($cognitive_values);
        $sum_of_cognitive_raw = $lrs->getSumOfCognitive([
            'fg' => $reportCognitive->figure_ground,
            'fc' => $reportCognitive->form_completion,
            'ca' => $reportCognitive->classification_analogies,
            'so' => $reportCognitive->sequential_order,
            'vp' => $reportCognitive->visual_patterns
        ]);
        $nonverbal_iq = $lrs->getNonverbalIq($sum_of_cognitive);
        $nonverbal_iq_percentile = $lrs->getPercentileFromStandard($nonverbal_iq);
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
        $memory_attention_values_percentile = [
            'as' => $lrs->getPercentileFromRank($memory_attention_values['as']),
            'fm' => $lrs->getPercentileFromRank($memory_attention_values['fm']),
            'rm' => $lrs->getPercentileFromRank($memory_attention_values['rm']),
            'as' => $lrs->getPercentileFromRank($memory_attention_values['as']),
            'nsic' => $lrs->getPercentileFromRank($memory_attention_values['nsic']),
            'nscc' => $lrs->getPercentileFromRank($memory_attention_values['nscc']),
            'nseff' => "Missing table"
        ];

        $sum_of_nonverbal_memory = $lrs->getSumOfNonverbalMemory($memory_attention_values);
        $composite_nonverbal_memory = $lrs->getCompositeMemory($sum_of_nonverbal_memory);
        $composite_nonverbal_memory_percentile = $lrs->getPercentileFromStandard($composite_nonverbal_memory);
        $confidence_interval_noverbal_memory = $lrs->getConfidenceIntervalNonverbalMemory($composite_nonverbal_memory);

        $sum_of_processing_speed = $lrs->getSumOfProcessingSpeed($memory_attention_values);
        $composite_processing_speed = $lrs->getCompositeProcessingSpeed($sum_of_processing_speed);
        $composite_processing_speed_percentile = $lrs->getPercentileFromStandard($composite_processing_speed);
        $confidence_interval_processing_speed = $lrs->getConfidenceIntervalProcessingSpeed($composite_processing_speed);

        $attention_anonymous_values = [
            'ase' => $lrs->getAttentionScaledScore('attention_sustained_error', $reportSupplementalAttention, $age),
            'adc' => $lrs->getAttentionScaledScore('attention_devided_correct', $reportSupplementalAttention, $age),
            'adi' => $lrs->getAttentionScaledScore('attention_devided_incorrect', $reportSupplementalAttention, $age),
            'nsci' => $lrs->getAttentionScaledScore('nonverbal_stroop_congruent_incorrect', $reportSupplementalAttention, $age),
            'nsii' => $lrs->getAttentionScaledScore('nonverbal_stroop_incongruent_incorrect', $reportSupplementalAttention, $age)
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

        $examiner_social_percentile = $lrs->getPercentileFromStandard($examiner_scores['social']->scaled_score);
        $examiner_social_emotions = $lrs->getPercentileFromStandard($examiner_scores['emotions']->scaled_score);

        $sem_growth = [
            'nonverbal_iq' => [
                'sem' => $lrs->getSem(
                    SemGrowthNonverbalIQ::class,
                    $sum_of_cognitive_raw
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthNonverbalIQ::class,
                    $sum_of_cognitive_raw
                )
            ],
            'figure_ground' => [
                'sem' => $lrs->getSem(
                    SemGrowthFigureGround::class,
                    $reportCognitive->figure_ground
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthFigureGround::class,
                    $reportCognitive->figure_ground
                )
            ],
            'form_completion' => [
                'sem' => $lrs->getSem(
                    SemGrowthFormCompletion::class,
                    $reportCognitive->form_completion
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthFormCompletion::class,
                    $reportCognitive->form_completion
                )
            ],
            'classification_analogies' => [
                'sem' => $lrs->getSem(
                    SemGrowthClassificationAnalogies::class,
                    $reportCognitive->classification_analogies
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthClassificationAnalogies::class,
                    $reportCognitive->classification_analogies
                )
            ],
            'sequential_order' => [
                'sem' => $lrs->getSem(
                    SemGrowthSequentialOrder::class,
                    $reportCognitive->sequential_order
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthSequentialOrder::class,
                    $reportCognitive->sequential_order
                )
            ],
            'visual_patterns' => [
                'sem' => $lrs->getSem(
                    SemGrowthVisualPatterns::class,
                    $reportCognitive->visual_patterns
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthVisualPatterns::class,
                    $reportCognitive->visual_patterns
                )
            ],
            'nonverbal_memory' => [
                'sem' => $lrs->getSem(
                    SemGrowthNonverbalMemory::class,
                    $sum_of_nonverbal_memory
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthNonverbalMemory::class,
                    $sum_of_nonverbal_memory
                )
            ],
            'forward_memory' => [
                'sem' => $lrs->getSem(
                    SemGrowthForwardMemory::class,
                    $reportMemory->forward_memory
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthForwardMemory::class,
                    $reportMemory->forward_memory
                )
            ],
            'reverse_memory' => [
                'sem' => $lrs->getSem(
                    SemGrowthReverseMemory::class,
                    $reportMemory->reverse_memory
                ),
                'growth' => $lrs->getGrowth(
                    SemGrowthReverseMemory::class,
                    $reportMemory->reverse_memory
                )
            ],
        ];

        $vs = $lrs->getCriticalValues($age);

        $diffs = [
            'nviq_nvm' => abs($nonverbal_iq - $composite_nonverbal_memory),
            'nviq_ps' => abs($nonverbal_iq - $composite_processing_speed),
            'nvm_ps' => abs($composite_nonverbal_memory - $composite_processing_speed),
        ];

        $diffs_percentile = [
            'nviq_nvm' => $lrs->getDiffPercentile($diffs['nviq_nvm'], $age, 'nviq_nvm'),
            'nviq_ps' => $lrs->getDiffPercentile($diffs['nviq_ps'], $age, 'nviq_ps'),
            'nvm_ps' => $lrs->getDiffPercentile($diffs['nvm_ps'], $age, 'nvm_ps'),
        ];

        $age_equivalent = [
            'cognitive' => $lrs->getAgeEquivalentCognitive($sem_growth['nonverbal_iq']['growth']),
            'memory' => $lrs->getAgeEquivalentMemory($sem_growth['nonverbal_memory']['growth']),
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
            'reportSupplementalAttention',
            'memory_attention_values',
            'memory_attention_values_percentile',
            'sum_of_nonverbal_memory',
            'sum_of_processing_speed',
            'composite_nonverbal_memory',
            'composite_processing_speed',
            'composite_processing_speed_percentile',
            'composite_nonverbal_memory_percentile',
            'confidence_interval_noverbal_memory',
            'confidence_interval_processing_speed',

            // Attention Anonymous
            'reportSupplementalAttention',
            'attention_anonymous_values',

            // Examiner
            'reportExaminer',
            'examiner_scores',
            'examiner_section_ad_sum',
            'examiner_section_eh_sum',
            'age_equivalent',

            'sem_growth',
            'examiner_social_percentile',
            'examiner_social_emotions',
            'vs',
            'diffs',
            'diffs_percentile'
        ));
    }
}
