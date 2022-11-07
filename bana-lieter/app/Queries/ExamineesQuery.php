<?php

namespace App\Queries;

use App\Models\Examinee;
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
            'examinees.gender',
            'creator.name as createdbyadminname',
            'examinees.created_at',
            'examinees.updated_at'
        )->where([
            ['examinees.name', 'LIKE', "%$request->name%"],
        ])
            ->orderBy('examinees.created_at', 'DESC')
            ->orderBy('examinees.updated_at', 'DESC')
            ->leftJoin('users as admin', 'examinees.admin_id', '=', 'admin.id')
            ->leftJoin('users as creator', 'examinees.created_by', '=', 'creator.id');

        if ($request->gender) {
            $query->where('examinees.gender', $request->gender);
        }

        /** @var \App\Models\User $user */
        $user = $request->user();
        if (!$user->hasRole('root')) {
            if ($user->hasRole('admin')) {
                $query->where('examinees.admin_id', $user->id);
            } elseif ($user->hasRole('sub_admin')) {
                $query->where('examinees.admin_id', $user->admin_id);
            }
        } elseif ($request->admin_id) {
            $query->where('examinees.admin_id', $request->admin_id);
        }

        return $query;
    }
}
