<?php

namespace App\Queries;

use App\Models\CasdExam;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CasdExamsQuery
{
    /**
     * Constructs Sub admins query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = CasdExam::select(
            'casd_exams.id',
            'examinees.id as examinee_id',
            'examinees.name as examineename',
            'examiner.name as examinername',
            'center.name as centername',
            'casd_exams.created_at'
        )
            // ->where([['examinees.name', 'LIKE', "%$request->name%"]])
            ->orderBy('casd_exams.created_at', 'DESC')
            ->orderBy('casd_exams.updated_at', 'DESC')
            ->leftJoin('users as examiner', 'casd_exams.created_by', '=', 'examiner.id')
            ->leftJoin('examinees', 'casd_exams.examinee_id', '=', 'examinees.id')
            ->leftJoin('users as center', 'examinees.admin_id', '=', 'center.id');

        // ->leftJoin('users as creator', 'examinees.created_by', '=', 'creator.id');

        if ($request->id) {
            $query->where('casd_exams.id', $request->id);
        }

        /** @var \App\Models\User $user */
        $user = $request->user();

        if ($user->hasRole('root')) {
            if ($request->admin_id) {
                $query->where('center.id', $request->admin_id);
            }
        } else {
            if ($user->hasRole('admin')) {
                $all_admins = $user->subAdmins->pluck('id')->toArray();
                $all_admins[] = $user->id;
                $query->whereIn('casd_exams.created_by', $all_admins);
            } elseif ($user->hasRole('sub_admin')) {
                $query->where('casd_exams.created_by', $user->id);
            }
        }

        return $query;
    }
}
