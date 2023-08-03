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
        $admin = User::findOrFail($id);

        $this->checkAccessToAdmin($admin, $id);

        return response()->json(new UserResource($admin));
    }

    public function create(CreateSubAdminRequest $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function update(UpdateSubAdminRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

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
