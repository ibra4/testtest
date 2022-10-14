<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    public function getConfig() {
        return [
            'statistics' => [
                'examinees' => number_format(1350),
                'total_reports' => number_format(20000),
                'admin' => number_format(200),
                'remaining_reports' => number_format(9400),
            ],
            'top_admins' => [
                
            ]
        ];
    }
}
