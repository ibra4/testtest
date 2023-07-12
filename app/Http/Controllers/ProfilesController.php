<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function myProfile()
    {
        $user = auth()->user();

        return view('my-profile.index', ['user' => $user]);
    }
}
