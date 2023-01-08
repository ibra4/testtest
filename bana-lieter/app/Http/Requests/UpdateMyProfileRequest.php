<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdateMyProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,$this->id",
            'phone_number' => "unique:users,phone_number,$this->id"
        ];

        if ($this->password && $this->password != "") {
            $rules['password'] = 'min:8|required_with:password_confirmation|same:password_confirmation';
        }

        return $rules;
    }

    public function passedValidation()
    {
        $this->passwordFixture();
    }

    private function passwordFixture()
    {
        if ($this->password && $this->password != '') {
            $this->merge(['password' => Hash::make($this->password)]);
        } else {
            $this->offsetUnset('password');
            $this->offsetUnset('password_confirmation');
        }
    }
}
