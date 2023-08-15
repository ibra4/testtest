<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMyProfileRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function index()
    {
        return $this->sendSuccessReponse(new UserResource(request()->user()));
    }

    public function update(UpdateMyProfileRequest $request)
    {
        $user = $request->user();

        $user->update($request->all());

        return $this->sendSuccessReponse($user);
    }

    public function actionChangeLangCode(Request $request)
    {
        $user = $request->user();
        $user->update(['locale' => $request->langcode]);
        app()->setLocale($request->langcode);
        return $this->sendSuccessReponse();
    }
}
