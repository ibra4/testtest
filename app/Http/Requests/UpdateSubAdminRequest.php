<?php

namespace App\Http\Requests;

use App\Http\Requests\Users\HasUserRequest;
use App\Http\Requests\Users\UserRequestInterface;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubAdminRequest extends FormRequest implements UserRequestInterface
{
    use HasUserRequest;

    public function getRole(): string
    {
        return 'sub_admin';
    }

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
}