<?php

namespace App\Http\Requests;

use App\Http\Requests\Users\HasUserRequest;
use App\Http\Requests\Users\UserRequestInterface;
use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest implements UserRequestInterface
{

    use HasUserRequest;

    public function getRole(): string
    {
        return 'admin';
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
            'email' => 'required|email|unique:users',
            'phone_number' => "unique:users|nullable",
            'number_of_leiter_reports' => 'numeric',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
        ];
    }
}
