<?php

namespace App\Services;

use App\Models\Helpers\AttentionDevidedCorrect;
use App\Models\Helpers\AttentionDevidedIncorrect;
use App\Models\Helpers\AttentionSustainedError;
use App\Models\Helpers\ConfidenceInterval;
use App\Models\Helpers\ConfidenceIntervalNonverbalMemory;
use App\Models\Helpers\ConfidenceIntervalProcessingSpeed;
use App\Models\Helpers\GrowthScaleAgeEquivalentsCognitiveGrowthScale;
use App\Models\Helpers\GrowthScaleAgeEquivalentsMemoryGrowthScale;
use App\Models\Helpers\parents\ExaminerRatingRecord;
use App\Models\Helpers\MemoryAndProcessingSpeedComposite;
use App\Models\LeiterRecord;
use App\Models\Helpers\NonverbalIq;
use App\Models\Helpers\PercentileRanksScaledScore;
use App\Models\Helpers\ProcessingSpeedComposite;
use App\Models\Helpers\ScoreDiffVs;
use App\Models\Helpers\SemGrowthFigureGround;
use Illuminate\Support\Facades\DB;
use stdClass;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LeiterRecordsService
{
    public function getScaledScore($type, $rowScore, $age, $throwException = false)
    {
        $record = LeiterRecord::select(
            'scaled_score'
        )
            ->where('type', $type)
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('value', $rowScore)
            ->get()
            ->first();

        if (!$record) {
            if ($throwException) {
                [$min, $max] = $this->getMinMaxScaledScore($age, $type);
                throw new NotFoundHttpException(__("Score not allowed, $min to $max"));
            } else {
                return false;
            }
        }

        return $record->scaled_score;
    }

    public function getExaminerScaledScore(string $model, $rowScore, $age, $throwException = false)
    {
        $record = $model::where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('row_score', $rowScore)
            ->get()
            ->first();

        if (!$record) {
            if ($throwException) {
                [$min, $max] = $this->getMinMaxExaminerScaledScore($age, $model);
                throw new NotFoundHttpException(__("Score not allowed, $min to $max"));
            } else {
                $result = new stdClass();
                $result->scaled_score = __("Not found");
                $result->percentile = __("Not found");
                return $result;
            }
        }

        return $record;
    }

    public function getAttentionScaledScore($field, $report, $age)
    {
        switch ($field) {
            case 'attention_sustained_error':
                $model = AttentionSustainedError::class;
                break;
            case 'attention_divided_correct':
                $model = AttentionDevidedCorrect::class;
                break;
            case 'attention_divided_incorrect':
                $model = AttentionDevidedIncorrect::class;
                break;
            case 'nonverbal_stroop_congruent_incorrect':
                $model = AttentionSustainedError::class;
                break;
            case 'nonverbal_stroop_incongruent_incorrect':
                $model = AttentionSustainedError::class;
                break;
            default:
                $model = AttentionSustainedError::class;
        }

        $record = $model::select(
            'scaled_score',
            'percentile'
        )
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('row_score', $report->$field)
            ->get()
            ->first();

        return [
            'scaled_score' => $record ? $record->scaled_score : __("Not found"),
            'percentile' => $record ? $record->percentile : __("Not found")
        ];
    }

    public function validateAttentionScaledScore($rowScore, $model, $age)
    {
        $record = $model::select(
            'scaled_score',
            'percentile'
        )
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->where('row_score', $rowScore)
            ->get()
            ->first();

        if (!$record) {
            [$min, $max] = $this->getMinMaxAttentionScaledScore($model, $age, $rowScore);
            throw new NotFoundHttpException(__("Score not allowed, $min to $max"));
        }
    }

    public function getSumOfCognitive(array $values)
    {
        $valuesMock = $values;
        unset($valuesMock['vp']);

        return array_sum(in_array(0, $valuesMock) ? $values : $valuesMock);
    }

    public function getSumOfNonverbalMemory(array $values)
    {
        return $values['fm'] + $values['rm'];
    }

    public function getSumOfProcessingSpeed(array $values)
    {
        return $values['as'] + $values['nsic'];
    }

    public function getNonverbalIq(int $sum_of_scaled_score)
    {
        $nonverbalIq = NonverbalIq::where('sum_of_scaled_score', $sum_of_scaled_score)->first();
        return $nonverbalIq->value;
    }

    public function getConfidenceIntervalCognitive(int $nonverbal_iq)
    {
        $nonverbalIq = ConfidenceInterval::where('nonverbal_iq', $nonverbal_iq)->first();

        if (!$nonverbalIq) {
            return __("Not found");
        }

        if (!$nonverbalIq->low) {
            return $nonverbalIq->high;
        }

        if (!$nonverbalIq->high) {
            return $nonverbalIq->low;
        }

        return "$nonverbalIq->low - $nonverbalIq->high";
    }

    public function getConfidenceIntervalNonverbalMemory(int $composite_score)
    {
        $condifenceNonverbalMemory = ConfidenceIntervalNonverbalMemory::where('composite_score', $composite_score)->first();

        if (!$condifenceNonverbalMemory) {
            return __("Not found");
        }

        if (!$condifenceNonverbalMemory->low) {
            return $condifenceNonverbalMemory->high;
        }

        if (!$condifenceNonverbalMemory->high) {
            return $condifenceNonverbalMemory->low;
        }

        return "$condifenceNonverbalMemory->low - $condifenceNonverbalMemory->high";
    }

    public function getConfidenceIntervalProcessingSpeed(int $composite_score)
    {
        $condifenceProcessingSpeed = ConfidenceIntervalProcessingSpeed::where('composite_score', $composite_score)->first();

        if (!$condifenceProcessingSpeed) {
            return __("Not found");
        }

        if (!$condifenceProcessingSpeed->low) {
            return $condifenceProcessingSpeed->high;
        }

        if (!$condifenceProcessingSpeed->high) {
            return $condifenceProcessingSpeed->low;
        }

        return "$condifenceProcessingSpeed->low - $condifenceProcessingSpeed->high";
    }

    public function getCompositeMemory(int $sum_of_scaled_score)
    {
        $compositeMemory = MemoryAndProcessingSpeedComposite::where('sum_of_scaled_score', $sum_of_scaled_score)->first();
        // Because of error in importing data
        return $compositeMemory->processing_speed;
    }

    public function getCompositeProcessingSpeed(int $sum_of_scaled_score)
    {
        $compositeMemory = MemoryAndProcessingSpeedComposite::where('sum_of_scaled_score', $sum_of_scaled_score)->first();
        // Because of error in importing data
        return $compositeMemory->composite_score;
    }

    public function getSem(string $model, int $row_score)
    {
        $record = $model::where('row_score', $row_score)->first();

        return $record ?  $record->sem : __("Not found");
    }

    public function getGrowth(string $model, int $row_score)
    {
        $record = $model::where('row_score', $row_score)->first();

        return $record ? $record->growth : __("Not found");
    }

    public function getPercentileFromRank($rank)
    {
        $record = PercentileRanksScaledScore::where('rank', $rank)->first();

        if (!$record) {
            return false;
        }

        return $record->percentile;
    }

    public function getPercentileFromStandard($value)
    {
        $record = PercentileRanksScaledScore::where('standard', $value)->first();
        if (!$record) {
            return __("Not found");
        }
        return $record->percentile;
    }

    public function getAgeEquivalentCognitive($value)
    {
        $record = GrowthScaleAgeEquivalentsCognitiveGrowthScale::where('growth_score', $value)->first();

        if (!$record) {
            return __("Not found");
        }

        return "$record->years - $record->months";
    }

    public function getAgeEquivalentMemory($value)
    {
        $record = GrowthScaleAgeEquivalentsMemoryGrowthScale::where('growth_score', $value)->first();

        if (!$record) {
            return __("Not found");
        }

        return "$record->years - $record->months";
    }

    public function getCriticalValues($age)
    {
        if ($age < 72) {
            $idx = 0;
        } elseif ($age >= 72 && $age < 660) {
            $idx = 1;
        } else {
            $idx = 2;
        }

        return config('leiter')['vs'][$idx];
    }

    public function getDiffPercentile($diff, $age, $attr)
    {
        $records = ScoreDiffVs::where('score_diff', $diff)
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->orderBy('value', 'ASC')
            ->get();

        if ($records->empty()) {
            return __("Not found");
        }

        return $records->first()->{$attr};
    }


    private function getMinMaxScaledScore(int $age, string $type)
    {
        $records = LeiterRecord::where('type', $type)
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->orderBy('value', 'ASC')
            ->get();

        return [
            $records->first()->value,
            $records->last()->value
        ];
    }

    private function getMinMaxExaminerScaledScore(int $age, string $model)
    {
        $records = $model::where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->get();

        return [
            $records->first()->row_score,
            $records->last()->row_score
        ];
    }

    public function getMinMaxAttentionScaledScore($model, $age, $rowScore)
    {
        $records = $model::where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->get();

        return [
            $records->first()->row_score,
            $records->last()->row_score
        ];
    }

    /**
     * Gets a text paragraph depending on mark
     *
     * @param  mixed $mark
     * @return void
     */
    public function getIQCategoryKeyWord(string $type, int $mark)
    {
        if ($mark >= 30 && $mark <= 39) {
            $minMax = '30 - 39';
        } else if ($mark >= 40 && $mark <= 54) {
            $minMax = '40 - 54';
        } else if ($mark >= 55 && $mark <= 69) {
            $minMax = '55 - 69';
        } else if ($mark >= 70 && $mark <= 79) {
            $minMax = '70 - 79';
        } else if ($mark >= 80 && $mark <= 89) {
            $minMax = '80 - 89';
        } else if ($mark >= 90 && $mark <= 109) {
            $minMax = '90 - 109';
        } else if ($mark >= 110 && $mark <= 119) {
            $minMax = '110 - 119';
        } else if ($mark >= 120 && $mark <= 129) {
            $minMax = '120 - 129';
        } else if ($mark >= 130 && $mark <= 149) {
            $minMax = '130 - 149';
        } else if ($mark >= 150 && $mark <= 170) {
            $minMax = '150 - 170';
        } else {
            return "";
        }

        $iq = collect(config("leiter.iq"));
        $targetIq = $iq->filter(function ($item) use ($minMax) {
            return $item['iq_composite_score'] == $minMax;
        })->first();

        return sprintf(__(config("leiter.scores_text.$type")), $mark, __($targetIq['label']) ?? __("Not found"));
    }
}
