<?php

namespace App\Http\Controllers\Api;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
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

    public function export(Request $request)
    {
        return Excel::download(new UsersExport($request), 'users.xlsx');
    }
}
