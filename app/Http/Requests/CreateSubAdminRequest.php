<?php

namespace App\Http\Requests;

use App\Http\Requests\Users\HasUserRequest;
use App\Http\Requests\Users\UserRequestInterface;
use Illuminate\Foundation\Http\FormRequest;

class CreateSubAdminRequest extends FormRequest implements UserRequestInterface
{
    use HasUserRequest {
        passedValidation as parentPassedValidation;
    }

    public function authorize()
    {
        return request()->user()->hasRole('admin');
    }

    public function getRole(): string
    {
        return 'sub_admin';
    }


    public function passedValidation()
    {
        $this->parentPassedValidation();

        if (!$this->user()->hasRole('root')) {
            $this->merge(['admin_id' => $this->user()->id]);
        }
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
            'phone_number' => "unique:users",
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
        ];
    }
}
