<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LatestReportsResource;
use App\Models\Reports\Report;
use Illuminate\Support\Facades\DB;

class InfoController  extends Controller
{
    public function historyTeaser()
    {
        $reports = Report::limit(5)->orderBy('id', 'DESC')->get();
        return response()->json(LatestReportsResource::collection($reports));
    }

    public function historyIndex()
    {
        $reports = Report::select([
            'reports.id',
            'examinee.name as examinee_name',
            'admin.name as admin_name',
            'admin.avatar as admin_avatar',
            'reports.created_at as created_at',
            'reports.updated_at as updated_at',
        ])
            ->where('admin.is_deleted', false)
            ->leftJoin('examinees as examinee', 'examinee.report_id', '=', 'reports.id')
            ->leftJoin('users as admin', 'examinee.admin_id', '=', 'admin.id');

        return response()->json($reports->paginate());
    }

    public function top5Teaser()
    {
        $admins = DB::table('users')
            ->select(
                'users.id',
                'users.name',
                'users.avatar',
                DB::raw("SUM(sub_admins.used_reports) + users.used_reports as used_reports")
            )
            ->leftJoin('users as sub_admins', function ($join) {
                $join->on('sub_admins.admin_id', '=', 'users.id');
                $join->on('sub_admins.role', '=', DB::raw('"sub_admin"'));
            })
            ->where('users.is_deleted', false)
            ->where('users.number_of_reports','>',0)
            ->groupBy('users.id')
            ->orderBy('users.used_reports','DESC')
            ->get();
        return response()->json($admins);
    }
}
