<?php

namespace App\Http\Requests;

use App\Rules\MaxWordsRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateExamineeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'birthday' => 'required|date|before:-3 years',
            'application_date' => 'required|date',
            'gender' => 'required|boolean',
            'country_id' => 'required|exists:countries,id',
            'examiner_notes' => new MaxWordsRule()
        ];
    }
}
