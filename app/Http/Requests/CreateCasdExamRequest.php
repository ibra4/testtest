<?php

namespace App\Http\Requests;

use App\Rules\MaxWordsRule;
use Illuminate\Foundation\Http\FormRequest;

// @TODO: Maybe we can merge it with some other class
class CreateCasdExamRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'application_date' => 'required|date',
            'examiner_notes' => new MaxWordsRule()
        ];
    }
}
