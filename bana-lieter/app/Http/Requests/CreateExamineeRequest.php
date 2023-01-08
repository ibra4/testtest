<?php

namespace App\Http\Requests;

use App\Rules\MaxWordsRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateExamineeRequest extends FormRequest
{
    public function prepareForValidation()
    {
        $user = $this->user();
        if (!$this->user()->hasRole('root')) {
            /** @var \App\Models\User $user */
            $this->merge(['admin_id' => $user->id]);
        }
        $this->merge(['created_by' => $user->id]);
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
            'birthday' => 'required|date',
            'application_date' => 'required|date',
            'gender' => 'required|boolean',
            'country_id' => 'required|exists:countries,id',
            'admin_id' => 'required|exists:users,id',
            'examiner_notes' => new MaxWordsRule()
        ];
    }
}
