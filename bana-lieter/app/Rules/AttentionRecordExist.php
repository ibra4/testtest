<?php

namespace App\Rules;

use App\Services\LeiterRecordsService;
use Illuminate\Contracts\Validation\Rule;

class AttentionRecordExist implements Rule
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
    public function __construct($age, $type, LeiterRecordsService $lrs, $model)
    {
        $this->age = $age;
        $this->type = $type;
        $this->lrs = $lrs;
        $this->model = $model;
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
            $this->lrs->getAttentionScaledScore($attribute, $value, $this->age);
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
