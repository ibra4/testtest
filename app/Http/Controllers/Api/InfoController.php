<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LatestReportsResource;
use App\Models\Reports\LeiterReport;
use Illuminate\Support\Facades\DB;

class InfoController  extends Controller
{
    public function historyTeaser()
    {
        $reports = LeiterReport::limit(5)->orderBy('id', 'DESC')->get();
        return $this->sendSuccessReponse(LatestReportsResource::collection($reports));
    }

    public function historyIndex()
    {
        $reports = LeiterReport::select([
            'leiter_reports.id',
            'examinee.name as examinee_name',
            'admin.name as admin_name',
            'admin.avatar as admin_avatar',
            'leiter_reports.created_at as created_at',
            'leiter_reports.updated_at as updated_at',
        ])
            ->where('admin.is_deleted', false)
            ->leftJoin('examinees as examinee', 'leiter_reports.examinee_id', '=', 'examinee.id')
            ->leftJoin('users as admin', 'examinee.admin_id', '=', 'admin.id');

        return $this->sendSuccessReponse($reports->paginate());
    }

    public function top5Teaser()
    {
        $admins = DB::table('users')
            ->select(
                'users.id',
                'users.name',
                'users.avatar',
                DB::raw("SUM(sub_admins.used_leiter_reports) + users.used_leiter_reports as used_leiter_reports")
            )
            ->leftJoin('users as sub_admins', function ($join) {
                $join->on('sub_admins.admin_id', '=', 'users.id');
                $join->on('sub_admins.role', '=', DB::raw('"sub_admin"'));
            })
            ->where('users.is_deleted', false)
            ->where('users.number_of_leiter_reports','>',0)
            ->groupBy('users.id')
            ->orderBy('users.used_leiter_reports','DESC')
            ->limit(5)
            ->get();
        return $this->sendSuccessReponse($admins);
    }
}
