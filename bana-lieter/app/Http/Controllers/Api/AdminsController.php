<?php

namespace App\Http\Controllers\Api;

use App\Exports\AdminsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class AdminsController extends Controller
{
    public function index(Request $request)
    {
        $admins = User::select(
            'users.id',
            'users.name',
            'users.avatar',
            'users.email',
            'users.number_of_reports',
            'users.created_at',
            'users.updated_at',
            DB::raw("SUM(sub_admins.used_reports) + users.used_reports as used_reports")
        )
            ->where([
                'users.is_deleted' => false,
                'users.role' => 'admin',
                ['users.name', 'LIKE', "%$request->name%"],
                ['users.email', 'LIKE', "%$request->email%"],
            ])
            ->leftJoin('users as sub_admins', function ($join) {
                $join->on('sub_admins.admin_id', '=', 'users.id');
                $join->on('sub_admins.role', '=', DB::raw('"sub_admin"'));
            })
            ->orderBy('users.created_at', 'DESC')
            ->orderBy('users.updated_at', 'DESC')
            ->groupBy('users.id')
            ->paginate();

        return response()->json($admins);
    }

    public function get($id)
    {
        return response()->json(new UserResource(User::findOrFail($id)));
    }

    public function create(CreateAdminRequest $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function update(UpdateAdminRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json($user);
    }

    public function export(Request $request)
    {
        return Excel::download(new AdminsExport($request), 'admins.xlsx');
    }

    public function delete($id)
    {
        if (!request()->user()->hasRole('root')) {
            return response()->json(
                ['message' => __('You don\'t have permission to delete this user')],
                403
            );
        }

        $user = User::findOrFail($id);

        $user->update(['is_deleted' => true]);

        return response()->json(['message' => __('Deleted successfully')]);
    }
}
