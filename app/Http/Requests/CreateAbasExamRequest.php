<?php

namespace App\Http\Requests;

use App\Enums\AbasExamTypesEnum;
use App\Rules\MaxWordsRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateAbasExamRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $allowedFor = AbasExamTypesEnum::getAllFields();
        return [
            'application_date' => 'required|date',
            'examiner_notes' => new MaxWordsRule(),
            'for' => "required|string|in:$allowedFor"
        ];
    }
}
