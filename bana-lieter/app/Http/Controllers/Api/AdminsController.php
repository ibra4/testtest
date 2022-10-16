<?php

namespace App\Http\Controllers\Api;

use App\Exports\AdminsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AdminsController extends Controller
{
    public function index(Request $request)
    {
        $admins = User::where([
            'role' => 'admin',
            ['name', 'LIKE', "%$request->name%"],
            ['email', 'LIKE', "%$request->email%"],
        ])
            ->orderBy('created_at', 'DESC')
            ->orderBy('updated_at', 'DESC')
            ->paginate();
        return response()->json($admins);
    }

    public function get($id)
    {
        return response()->json(new UserResource(User::findOrFail($id)));
    }

    public function create(CreateAdminRequest $request)
    {
        $data = $request->all();
        $data['role'] = 'admin';
        if (!$request->user()->can('root')) {
            $data['admin_id'] = $request->user()->id;
        }
        $data['password'] = Hash::make("12345678");
        $user = User::create($data);
        return response()->json($user);
    }

    public function update(UpdateAdminRequest $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
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
        return Excel::download(new AdminsExport($request), 'admins.xlsx');
    }
}
