<?php

namespace App\Http\Controllers\Api;

use App\Exports\SubAdminsExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SubAdminsController extends Controller
{
    public function index(Request $request)
    {
        $admins = User::where([
            'role' => 'sub_admin',
            ['name', 'LIKE', "%$request->name%"],
            ['email', 'LIKE', "%$request->email%"],
        ])
            ->orderBy('created_at', 'DESC')
            ->orderBy('updated_at', 'DESC');
        if (!$request->user()->can('root')) {
            $admins->where('admin_id', $request->user()->id);
        } elseif ($request->admin_id) {
            $admins->where('admin_id', $request->admin_id);
        }
        return response()->json($admins->paginate());
    }

    public function export(Request $request)
    {
        return Excel::download(new SubAdminsExport($request), 'sub-admins.xlsx');
    }
}
