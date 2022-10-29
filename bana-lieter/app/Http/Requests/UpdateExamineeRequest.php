<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExamineeRequest extends FormRequest
{
    public function passedValidation()
    {
        if (!$this->user()->hasRole('root')) {
            $this->merge(['admin_id' => $this->user()->id]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'age' => 'required|numeric',
            'gender' => 'required|boolean',
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
        ];
    }
}
