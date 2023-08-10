<?php

namespace App\Queries;

use App\Models\Reports\LeiterReport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class LeiterReportsQuery
{
    /**
     * Constructs Sub admins query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = LeiterReport::select(
            'leiter_reports.id',
            'leiter_reports.created_at',
            'leiter_reports.updated_at',
            'examiner.name as examinername',
            'center.name as centername',
            'examiner.id as admin_id',
            'examinees.id as examinee_id',
            'examinees.name',
            'examinees.birthday',
            'examinees.gender',
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
        )->where([['examinees.name', 'LIKE', "%$request->name%"]])
            ->orderBy('leiter_reports.created_at', 'DESC')
            ->orderBy('leiter_reports.updated_at', 'DESC')
            ->leftJoin('users as examiner', 'leiter_reports.created_by', '=', 'examiner.id')
            ->leftJoin('examinees as examinees', 'leiter_reports.examinee_id', '=', 'examinees.id')
            ->leftJoin('users as center', 'examinees.admin_id', '=', 'center.id')

            ->leftJoin('report_cognitive_subtests as rcs', 'leiter_reports.report_cognitive_subtest_id', '=', 'rcs.id')
            ->leftJoin('report_memory_batteries as rmb', 'leiter_reports.report_memory_battery_id', '=', 'rmb.id')
            ->leftJoin('report_attentions as ra', 'leiter_reports.report_attention_id', '=', 'ra.id')
            ->leftJoin('report_examiner_rating_scale_sections as rerss', 'leiter_reports.report_examiner_rating_scale_section_id', '=', 'rerss.id')
            ->leftJoin('report_narratives as rn', 'leiter_reports.report_narrative_id', '=', 'rn.id');


        // ->leftJoin('users as creator', 'examinees.created_by', '=', 'creator.id');


        if ($request->id) {
            $query->where('leiter_reports.id', $request->id);
        }

        // /** @var \App\Models\User $user */
        $user = $request->user();
        if (!$user->hasRole('root')) {
            if ($user->hasRole('admin')) {
                $all_admins = User::where('admin_id', $user->id)->get()->pluck('id')->toArray();
                $all_admins[] = $user->id;
                $query->whereIn('leiter_reports.created_by', $all_admins);
            } elseif ($user->hasRole('sub_admin')) {
                $query->where('leiter_reports.created_by', $user->id);
            }
        } elseif ($request->admin_id) {
            $query->where('examinees.admin_id', $request->admin_id);
        }

        return $query;
    }
}
