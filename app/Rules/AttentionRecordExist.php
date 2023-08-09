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
     * @var int
     */
    protected $age;

    /**
     * @var Model
     */
    protected $model;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($age, $model, LeiterRecordsService $lrs)
    {
        $this->age = $age;
        $this->model = $model;
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
            $this->lrs->validateAttentionScaledScore($value, $this->model, $this->age);
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
