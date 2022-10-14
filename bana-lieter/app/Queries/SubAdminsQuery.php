<?php

namespace App\Queries;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class SubAdminsQuery
{
    /**
     * Constructs Sub admins query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request)
    {
        $query = User::select('users.id', 'users.name', 'users.email', 'admin.name as adminname', 'users.created_at', 'users.updated_at')->where([
            'users.role' => 'sub_admin',
            ['users.name', 'LIKE', "%$request->name%"],
            ['users.email', 'LIKE', "%$request->email%"],
        ])
            ->orderBy('users.created_at', 'DESC')
            ->orderBy('users.updated_at', 'DESC')
            ->leftJoin('users as admin', 'users.admin_id', '=', 'admin.id');
        if (!$request->user()->can('root')) {
            $query->where('users.admin_id', $request->user()->id);
        } elseif ($request->admin_id) {
            $query->where('users.admin_id', $request->admin_id);
        }

        return $query;
    }
}
