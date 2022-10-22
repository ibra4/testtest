<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryStatisticController extends Controller
{
    public function index($id)
    {
        return response()->json([
            'admins' => rand(0, 15),
            'total_reports' => rand(200, 500),
            'used_reports' => rand(0, 200),
            'examinees' => rand(0, 100)
        ]);
    }
}
