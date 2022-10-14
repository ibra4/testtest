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
                'examinees' => number_format(1350),
                'total_reports' => number_format(20000),
                'admin' => number_format(200),
                'remaining_reports' => number_format(9400),
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
