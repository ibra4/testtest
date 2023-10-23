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
            DB::raw('users.number_of_leiter_reports + users.number_of_casd_reports + users.number_of_mpr_reports + users.number_of_abas_reports as number_of_total_reports'),
            'users.created_at',
            'users.updated_at'
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

        return $this->sendSuccessReponse($admins);
    }

    public function get($id)
    {
        return $this->sendSuccessReponse(new UserResource(User::findOrFail($id)));
    }

    public function create(CreateAdminRequest $request)
    {
        $user = User::create($request->all());
        return $this->sendSuccessReponse($user);
    }

    public function update(UpdateAdminRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        if ($request->is_active === false) {
            foreach ($user->subAdmins as $subAdmin) {
                $subAdmin->update(['is_active' => false]);
            }
        }

        return $this->sendSuccessReponse($user);
    }

    public function export(Request $request)
    {
        return Excel::download(new AdminsExport($request), 'admins.xlsx');
    }

    public function actionDelete($id)
    {
        if (!request()->user()->hasRole('root')) {
            return $this->sendErrorMessage(__("You don't have permission to delete this user"), 403);
        }

        $user = User::findOrFail($id);

        $user->update(['is_deleted' => true]);

        return $this->sendSuccessReponse(['message' => __('Deleted successfully')]);
    }
}
