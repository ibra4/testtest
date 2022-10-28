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
}
