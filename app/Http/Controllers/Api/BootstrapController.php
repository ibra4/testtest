<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Resources\UserResource;
use App\Models\Country;
use App\Models\Examinee;
use App\Models\Reports\Report;
use App\Models\User;
use App\Repositories\ReportRepository;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    /**
     * @var ReportRepository
     */
    protected $reportRepository;

    public function __construct(
        ReportRepository $reportRepository
    ) {
        $this->reportRepository = $reportRepository;
    }

    public function getConfig(Request $request)
    {
        if ($request->user()->hasRole('root')) {
            $total_reports = User::where('role', 'admin')->sum('number_of_reports');
        }

        if ($request->user()->role == 'admin') {
            $total_reports = $request->user()->number_of_reports;
        }

        if ($request->user()->role == 'sub_admin') {
            $total_reports = $request->user()->admin->number_of_reports;
        }

        $used_reports =  $request->user()->hasRole('root')
            ? Report::count()
            : $this->reportRepository->getNumberOfUsedReportsForCenter($request->user());

        $data = [
            'statistics' => [
                'total_reports' => $total_reports,
                'used_reports' => $used_reports,
                'admins' => User::where('role', 'admin')->count(),
                'sub_admins' => User::where('role', 'sub_admin')->count(),
                'examinees' => Examinee::count()
            ],
            'user' => new UserResource($request->user()),
            'top_admins' => [],
            'countries' => CountryResource::collection(Country::all()),
        ];

        // Fix
        if ($request->user()->can('root')) {
        }
        $data['admins'] = User::select('id', 'name AS label')->where('role', 'admin')->get();
        $data['leiter_tables_types'] = config('enums.leiter_tables_types');

        return $data;
    }
}