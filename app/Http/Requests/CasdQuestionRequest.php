<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasdQuestionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'casd_sub_domain_id' => 'required|exists:casd_sub_domains,id'
        ];
    }
}
