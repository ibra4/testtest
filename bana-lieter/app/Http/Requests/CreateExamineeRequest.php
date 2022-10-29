<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateExamineeRequest extends FormRequest
{
    public function prepareForValidation()
    {
        if (!$this->user()->hasRole('root')) {
            /** @var \App\Models\User $user */
            $user = $this->user();
            $this->merge(['admin_id' => $user->hasRole('admin') ? $user->id : $user->admin_id]);
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
            'age' => 'required|numeric',
            'gender' => 'required|boolean',
            'city_id' => 'required|exists:cities,id',
            'country_id' => 'required|exists:countries,id',
            'admin_id' => 'required|exists:users,id',
        ];
    }
}
