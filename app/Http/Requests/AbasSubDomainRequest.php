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
        $allowed_categories = implode(',', config('enums.abas_abas_sub_domains_categories'));
        return [
            'name' => 'required|string|max:255',
            'category' => "required|string|in:$allowed_categories",
        ];
    }
}
