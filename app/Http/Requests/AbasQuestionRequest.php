<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbasQuestionRequest extends FormRequest
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
            'abas_sub_domain_id' => 'required|exists:abas_sub_domains,id'
        ];
    }
}
