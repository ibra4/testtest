<?php

namespace App\Http\Controllers\Api;

use App\Exports\SubAdminsExport;
use App\Http\Controllers\Controller;
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
        return response()->json($this->subAdminsQuery->get($request)->paginate());
    }

    public function export(Request $request)
    {
        return Excel::download(new SubAdminsExport($request, $this->subAdminsQuery), 'sub-admins.xlsx');
    }
}
