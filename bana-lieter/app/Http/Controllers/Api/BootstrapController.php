<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    public function getConfig(Request $request)
    {
        $data = [
            'statistics' => [
                'total_reports' => User::where('role', 'admin')->sum('number_of_reports'),
                'used_reports' => 0,
            ],
            'user' => new UserResource($request->user()),
            'top_admins' => []
        ];

        if ($request->user()->can('root')) {
            $data['admins'] = User::select('id', 'name AS label')->where('role', 'admin')->get();
        }

        return $data;
    }
}
