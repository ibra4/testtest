<?php

namespace App\Http\Requests;

use App\Models\Examinee;
use App\Models\Helpers\ExaminerRatingAttention;
use App\Models\Helpers\ExaminerRatingEnergy;
use App\Models\Helpers\ExaminerRatingOrganization;
use App\Rules\AttentionRecordExist;
use App\Rules\CognitiveAndMemoryRecordExist;
use App\Rules\ExaminerRecordExist;
use App\Services\LeiterRecordsService;
use Illuminate\Foundation\Http\FormRequest;

class UpdateExamRequest extends FormRequest
{

    /**
     * Leiter Records Service.
     *
     * @var LeiterRecordsService
     */
    protected $lrs;

    public function __construct(LeiterRecordsService $lrs)
    {
        $this->lrs = $lrs;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $age = Examinee::findOrFail($this->route('id'))->age;

        switch ($this->type) {
            case 'cognitive':
                return [
                    'figure_ground' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'form_completion' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'classification_analogies' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'sequential_order' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'visual_patterns' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs)
                ];
            case 'memory':
                return [
                    'forward_memory' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'reverse_memory' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs)
                ];
            case 'attention':
                return [
                    'attention_sustained' => new CognitiveAndMemoryRecordExist($age, 'attention', $this->lrs),
                    'nonverbal_stroop_incongruent_correct' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'nonverbal_stroop_congruent_correct' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs)
                ];
            case 'supplemental_attention':
                return [
                    'attention_sustained_errors' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'attention_divided_correct' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'attention_divided_incorrect' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'nonverbal_stroop_congruent_incorrect' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                    'nonverbal_stroop_incongruent_incorrect' => new CognitiveAndMemoryRecordExist($age, $this->type, $this->lrs),
                ];
            case 'examiner':
                return [
                    'attention' => new ExaminerRecordExist($age, $this->lrs, ExaminerRatingAttention::class),
                    'organization_impulse_control' => new ExaminerRecordExist($age, $this->lrs, ExaminerRatingOrganization::class),
                    'energy_and_feelings' => new ExaminerRecordExist($age, $this->lrs, ExaminerRatingEnergy::class)
                ];
            default:
                return [];
        }
    }
}
