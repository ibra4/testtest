<?php

namespace App\Queries;

use App\Models\Examinee;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ExamineesQuery
{
    /**
     * Constructs Sub admins query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = Examinee::select(
            'examinees.id',
            'examinees.name',
            'examinees.birthday as age',
            'admin.name as adminname',
            'admin.id as admin_id',
            'examinees.gender',
            'examinees.created_at',
            'examinees.updated_at',
            'examinees.application_date',
            'report.id',
        )->where([
            ['examinees.name', 'LIKE', "%$request->name%"],
        ])
            ->orderBy('examinees.created_at', 'DESC')
            ->orderBy('examinees.updated_at', 'DESC')
            ->leftJoin('users as admin', 'examinees.admin_id', '=', 'admin.id')
            ->leftJoin('reports as report', 'report.id', '=', 'examinees.report_id')
            ->leftJoin('users as creator', 'examinees.created_by', '=', 'creator.id');

        if ($request->gender) {
            $query->where('examinees.gender', $request->gender);
        }


        /** @var \App\Models\User $user */
        $user = $request->user();
        if (!$user->hasRole('root')) {
            if ($user->hasRole('admin')) {
                $all_admins = User::where('admin_id', $user->id)->get()->pluck('id')->toArray();
                $query->whereIn('examinees.admin_id', [$user->id] + $all_admins);
            } elseif ($user->hasRole('sub_admin')) {
                $query->where('examinees.admin_id', $user->id);
            }
        } elseif ($request->admin_id) {
            $query->where('examinees.admin_id', $request->admin_id);
        }

        return $query;
    }
}
