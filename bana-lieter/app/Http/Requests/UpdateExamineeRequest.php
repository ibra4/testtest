<?php

namespace App\Http\Requests;

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
            'birthday' => 'required|date',
            'gender' => 'required|boolean',
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
        ];
    }
}
