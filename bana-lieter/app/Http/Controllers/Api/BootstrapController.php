<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Resources\UserResource;
use App\Models\Country;
use App\Models\Examinee;
use App\Models\Reports\Report;
use App\Models\User;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    public function getConfig(Request $request)
    {
        $data = [
            'statistics' => [
                'total_reports' => User::where('role', 'admin')->sum('number_of_reports'),
                'used_reports' => Report::count(),
                'admins' => User::where('role', 'admin')->count(),
                'sub_admins' => User::where('role', 'sub_admin')->count(),
                'examinees' => Examinee::count()
            ],
            'user' => new UserResource($request->user()),
            'top_admins' => [],
            'countries' => CountryResource::collection(Country::all()),
        ];

        // Fix
        if ($request->user()->can('root')) {
        }
        $data['admins'] = User::select('id', 'name AS label')->where('role', 'admin')->get();
        $data['leiter_tables_types'] = config('enums.leiter_tables_types');

        return $data;
    }
}
