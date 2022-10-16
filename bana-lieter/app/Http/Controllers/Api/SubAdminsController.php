<?php

namespace App\Http\Controllers\Api;

use App\Exports\SubAdminsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSubAdminRequest;
use App\Http\Requests\UpdateSubAdminRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Queries\SubAdminsQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class SubAdminsController extends Controller
{
    /**
     * subAdminQuery
     *
     * @var SubAdminsQuery
     */
    protected $subAdminsQuery;

    public function __construct(SubAdminsQuery $sbq)
    {
        $this->subAdminsQuery = $sbq;
    }

    public function index(Request $request)
    {
        return response()->json($this->subAdminsQuery->get($request)->paginate());
    }

    public function get($id)
    {
        $admin = User::where([
            'id' => $id,
            'role' => 'sub_admin'
        ])->firstOrFail();

        $this->checkAccessToAdmin($admin, $id);

        return response()->json(new UserResource($admin));
    }

    public function create(CreateSubAdminRequest $request)
    {
        $data = $request->all();
        $data['role'] = 'sub_admin';
        if (!$request->user()->can('root')) {
            $data['admin_id'] = $request->user()->id;
        }
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        return response()->json($user);
    }

    public function update(UpdateSubAdminRequest $request, $id)
    {
        $data = $request->all();
        $user = User::where([
            'id' => $id,
            'role' => 'sub_admin'
        ])->firstOrFail();
        $this->checkAccessToAdmin($user, $id);
        if ($request->password && $request->password != '') {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }
        unset($data['role']);
        unset($data['admin_id']);
        $user->update($data);
        return response()->json($user);
    }

    public function export(Request $request)
    {
        return Excel::download(new SubAdminsExport($request, $this->subAdminsQuery), 'sub-admins.xlsx');
    }

    /**
     * Check if admin has an access to admin
     *
     * @param  User $admin
     * @param  mixed $id
     * @return bool
     * @throws AccessDeniedHttpException
     */
    private function checkAccessToAdmin(User $admin, $id)
    {
        if (request()->user()->hasRole('root') || $id == request()->user()->id) {
            return true;
        } else {
            if (request()->user()->id == $admin->admin_id) {
                return true;
            } else {
                throw new AccessDeniedHttpException("You don't have access to get this user");
            }
        }
    }
}
