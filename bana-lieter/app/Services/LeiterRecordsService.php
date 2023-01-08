<?php

namespace App\Services;

use App\Models\Helpers\AttentionDevidedCorrect;
use App\Models\Helpers\AttentionDevidedIncorrect;
use App\Models\Helpers\AttentionSustainedError;
use App\Models\Helpers\ConfidenceInterval;
use App\Models\Helpers\ConfidenceIntervalNonverbalMemory;
use App\Models\Helpers\ConfidenceIntervalProcessingSpeed;
use App\Models\Helpers\parents\ExaminerRatingRecord;
use App\Models\Helpers\MemoryAndProcessingSpeedComposite;
use App\Models\LeiterRecord;
use App\Models\Helpers\NonverbalIq;
use App\Models\Helpers\ProcessingSpeedComposite;
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
                $result->scaled_score = "Not found";
                $result->percentile = "Not found";
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
            case 'attention_devided_correct':
                $model = AttentionDevidedCorrect::class;
                break;
            case 'attention_devided_incorrect':
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
            'scaled_score' => $record ? $record->scaled_score : "Not Found",
            'percentile' => $record ? $record->percentile : "Not Found"
        ];
    }

    public function getSumOfCognitive(array $vlaues)
    {
        $count = 0;

        foreach ($vlaues as $idx => $value) {
            $zero_detected = $value == 0;

            if (!$zero_detected && $idx == 'vp') {
                break;
            }

            $count += $value;
        }

        return $count;
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
            return "Not found";
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
            return "Not found";
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
            return "not found";
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
        return $compositeMemory->composite_score;
    }

    public function getCompositeProcessingSpeed(int $sum_of_scaled_score)
    {
        $compositeMemory = MemoryAndProcessingSpeedComposite::where('sum_of_scaled_score', $sum_of_scaled_score)->first();
        return $compositeMemory->processing_speed;
    }

    public function getSemGrowth(string $model, int $row_score)
    {
        $record = $model::where('row_score', $row_score)->first();

        return [
            'sem' => $record ?  $record->sem : "Not found",
            'growth' => $record ? $record->growth : "Not found"
        ];
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
}
