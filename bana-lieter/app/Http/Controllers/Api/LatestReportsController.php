<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LatestReportsResource;
use App\Models\Reports\Report;

class LatestReportsController  extends Controller
{
    public function teaser()
    {
        $reports = Report::limit(5)->orderBy('id', 'DESC')->get();
        return response()->json(LatestReportsResource::collection($reports));
    }

    public function index()
    {
        $reports = Report::select([
            'reports.id',
            'examinee.name as examinee_name',
            'admin.name as admin_name',
            'admin.avatar as admin_avatar',
            'reports.created_at as created_at',
            'reports.updated_at as updated_at',
        ])
            ->leftJoin('examinees as examinee', 'examinee.report_id', '=', 'reports.id')
            ->leftJoin('users as admin', 'examinee.admin_id', '=', 'admin.id');

        return response()->json($reports->paginate());
    }
}
