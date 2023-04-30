<?php

namespace App\Rules;

use App\Services\LeiterRecordsService;
use Illuminate\Contracts\Validation\Rule;

class CognitiveAndMemoryRecordExist implements Rule
{
    /**
     * Leiter Records Service.
     *
     * @var LeiterRecordsService
     */
    protected $lrs;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($age, $type, LeiterRecordsService $lrs)
    {
        $this->age = $age;
        $this->type = $type;
        $this->lrs = $lrs;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            if (in_array($attribute, [
                'attention_sustained_errors',
                'attention_divided_correct',
                'attention_divided_incorrect',
                'nonverbal_stroop_congruent_incorrect',
                'nonverbal_stroop_incongruent_incorrect',
                'attention_sustained'
            ])) {
                $attribute = 'attention';
            }
            $this->lrs->getScaledScore($attribute, $value, $this->age, true);
        } catch (\Throwable $th) {
            $this->message = $th->getMessage();
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
