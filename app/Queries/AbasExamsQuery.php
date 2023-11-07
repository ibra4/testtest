<?php

namespace App\Queries;

use App\Models\AbasExam;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class AbasExamsQuery
{
    /**
     * Constructs Sub admins query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = AbasExam::select(
            'abas_exams.id',
            'examinees.id as examinee_id',
            'examinees.name as examineename',
            'examiner.name as examinername',
            'center.name as centername',
            'abas_exams.category',
            'abas_exams.created_at'
        )
            // ->where([['examinees.name', 'LIKE', "%$request->name%"]])
            ->orderBy('abas_exams.created_at', 'DESC')
            ->orderBy('abas_exams.updated_at', 'DESC')
            ->leftJoin('users as examiner', 'abas_exams.created_by', '=', 'examiner.id')
            ->leftJoin('examinees', 'abas_exams.examinee_id', '=', 'examinees.id')
            ->leftJoin('users as center', 'examinees.admin_id', '=', 'center.id');

        // ->leftJoin('users as creator', 'examinees.created_by', '=', 'creator.id');

        if ($request->id) {
            $query->where('abas_exams.id', $request->id);
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
                $query->whereIn('abas_exams.created_by', $all_admins);
            } elseif ($user->hasRole('sub_admin')) {
                $query->where('abas_exams.created_by', $user->id);
            }
        }

        return $query;
    }
}
