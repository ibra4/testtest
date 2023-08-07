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
            'rcs.figure_ground',
            'rcs.form_completion',
            'rcs.classification_analogies',
            'rcs.sequential_order',
            'rcs.visual_patterns',
            'rmb.forward_memory',
            'rmb.reverse_memory',
            'ra.attention_sustained',
            'ra.nonverbal_stroop_congruent_correct',
            'ra.nonverbal_stroop_incongruent_correct',
            'rerss.attention',
            'rerss.organization_impulse_control',
            'rerss.activity_level',
            'rerss.sociability',
            'rerss.energy_and_feelings',
            'rerss.regulation',
            'rerss.anxiety',
            'rerss.sensory_reaction'
        )->where([
            ['examinees.name', 'LIKE', "%$request->name%"],
        ])
            ->orderBy('examinees.created_at', 'DESC')
            ->orderBy('examinees.updated_at', 'DESC')
            ->leftJoin('users as admin', 'examinees.admin_id', '=', 'admin.id')
            ->leftJoin('reports as reports', 'reports.id', '=', 'examinees.report_id')
            
            ->leftJoin('report_cognitive_subtests as rcs', 'reports.report_cognitive_subtest_id', '=', 'rcs.id')
            ->leftJoin('report_memory_batteries as rmb', 'reports.report_memory_battery_id', '=', 'rmb.id')
            ->leftJoin('report_attentions as ra', 'reports.report_attention_id', '=', 'ra.id')
            ->leftJoin('report_examiner_rating_scale_sections as rerss', 'reports.report_examiner_rating_scale_section_id', '=', 'rerss.id')
            ->leftJoin('report_narratives as rn', 'reports.report_narrative_id', '=', 'rn.id')
            

            ->leftJoin('users as creator', 'examinees.created_by', '=', 'creator.id');

        if ($request->gender) {
            $query->where('examinees.gender', $request->gender);
        }

        if ($request->id) {
            $query->where('examinees.id', $request->id);
        }

        /** @var \App\Models\User $user */
        $user = $request->user();
        if (!$user->hasRole('root')) {
            if ($user->hasRole('admin')) {
                $all_admins = User::where('admin_id', $user->id)->get()->pluck('id')->toArray();
                $all_admins[] = $user->id;
                $query->whereIn('examinees.admin_id', $all_admins);
            } elseif ($user->hasRole('sub_admin')) {
                $query->where('examinees.admin_id', $user->id);
            }
        } elseif ($request->admin_id) {
            $query->where('examinees.admin_id', $request->admin_id);
        }

        return $query;
    }
}
