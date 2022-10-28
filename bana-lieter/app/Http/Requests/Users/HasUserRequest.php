<?php

namespace App\Http\Requests\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

trait HasUserRequest
{
    public function passedValidation()
    {
        $this->passwordFixture();

        if ($this->id) {
            $this->offsetUnset('role');
            $this->offsetUnset('admin_id');
        }
    }

    public function prepareForValidation()
    {
        $this->merge(['role' => $this->getRole()]);
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

    public function authorize()
    {
        if (request()->user()->hasRole('root') || $this->id == request()->user()->id) {
            return true;
        }

        $wantedUser = User::find($this->id);

        if ($wantedUser->admin_id == request()->user()->id) {
            return true;
        }

        return false;
    }
}
