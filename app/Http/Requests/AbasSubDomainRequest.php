<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbasSubDomainRequest extends FormRequest
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
            // 'abas_domain_id' => 'exists:abas_domains,id',
            'for' => 'required|string|in:teacher,parent',
            'min_age' => 'required|numeric|integer|min:0',
            'max_age' => 'required|numeric|integer|min:0|gt:min_age'
        ];
    }
}
