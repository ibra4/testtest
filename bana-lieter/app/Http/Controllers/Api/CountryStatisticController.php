<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Examinee;
use App\Models\User;

class CountryStatisticController extends Controller
{
    public function index($id)
    {
        $country = Country::where('code', $id)->first();

        $admins = 0;
        $sub_admins = 0;
        $total_reports = 0;
        $examinees = 0;

        if ($country) {
            $admins = User::where('role', 'admin')
                ->where('country_id', $country->id)->count();

            $sub_admins = User::where('role', 'sub_admin')
                ->where('country_id', $country->id)->count();

            $total_reports = User::where('country_id', $country->id)->sum('number_of_reports');

            $examinees = Examinee::where('country_id', $country->id)->count();
        }

        $city = City::where('code', $id)->first();

        if ($city) {
            $admins = User::where('role', 'admin')
                ->where('city_id', $city->id)->count();

            $sub_admins = User::where('role', 'sub_admin')
                ->where('city_id', $city->id)->count();

            $total_reports = User::where('city_id', $city->id)->sum('number_of_reports');

            $examinees = Examinee::where('city_id', $city->id)->count();
        }


        return response()->json([
            'admins' => $admins,
            'sub_admins' => $sub_admins,
            'total_reports' => $total_reports,
            'used_reports' => $examinees,
            'examinees' => $examinees
        ]);
    }
}
