<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMyProfileRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class MyProfileController extends Controller
{
    public function index()
    {
        return $this->sendSuccessReponse(new UserResource(request()->user()));
    }

    public function update(UpdateMyProfileRequest $request)
    {
        $user = User::findOrFail($request->user()->id);

        $user->update($request->all());

        return $this->sendSuccessReponse($user);
    }
}
