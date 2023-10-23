<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateExamineeRequest extends FormRequest
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
            'gender' => 'required|boolean',
            'country_id' => 'required|exists:countries,id',
            'information_source' => 'nullable|in:' . implode(',', \App\Enums\ExamineeInformationSourceEnum::getAllFields()),
            'referral_source' => 'nullable|in:' . implode(',', \App\Enums\ExamineeReferralSourceEnum::getAllFields())
        ];
    }
}
