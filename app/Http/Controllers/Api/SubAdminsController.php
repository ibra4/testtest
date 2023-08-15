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
        return $this->sendSuccessReponse($this->subAdminsQuery->get($request)->paginate());
    }

    public function get($id)
    {
        $admin = User::findOrFail($id);

        if (!$this->checkAccessToAdmin($admin, $id)) {
            return $this->sendErrorMessage(__("You don't have permission to view this admin"), 403, 'replace');
        }

        return $this->sendSuccessReponse(new UserResource($admin));
    }

    public function create(CreateSubAdminRequest $request)
    {
        $user = User::create($request->all());
        return $this->sendSuccessReponse($user);
    }

    public function update(UpdateSubAdminRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return $this->sendSuccessReponse($user);
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
     */
    private function checkAccessToAdmin(User $admin, $id)
    {
        $currentUser = request()->user();

        if ($currentUser->hasRole('root') || $id == $currentUser->id) {
            return true;
        } else {
            return $currentUser->id == $admin->admin_id;
        }
    }
}
