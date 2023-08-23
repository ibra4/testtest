<?php

namespace App\Http\Controllers\Api;

use App\Enums\ReportTypesEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\AbasSubDomainListResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\UserNotificationResource;
use App\Http\Resources\UserResource;
use App\Models\AbasDomain;
use App\Models\AbasSubDomain;
use App\Models\Country;
use App\Models\Examinee;
use App\Models\Reports\LeiterReport;
use App\Models\User;
use App\Services\GeneralReportsService;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    /**
     * @var GeneralReportsService
     */
    protected $generalReportsService;

    public function __construct(
        GeneralReportsService $generalReportsService
    ) {
        $this->generalReportsService = $generalReportsService;
    }

    public function getConfig(Request $request)
    {
        if ($request->user()->hasRole('root')) {
            $total_reports = User::where('role', 'admin')->sum('number_of_leiter_reports');
        }

        if ($request->user()->role == 'admin') {
            $total_reports = $request->user()->number_of_leiter_reports;
        }

        if ($request->user()->role == 'sub_admin') {
            $total_reports = $request->user()->admin->number_of_leiter_reports;
        }

        $used_leiter_reports =  $request->user()->hasRole('root')
            ? LeiterReport::count()
            : $this->generalReportsService->getNumberOfUsedReportsForCenter($request->user(), ReportTypesEnum::LEITER);

        $data = [
            'statistics' => [
                'total_reports' => $total_reports,
                'used_leiter_reports' => $used_leiter_reports,
                'admins' => User::where('role', 'admin')->count(),
                'sub_admins' => User::where('role', 'sub_admin')->count(),
                'examinees' => Examinee::count()
            ],
            'user' => new UserResource($request->user()),
            'top_admins' => [],
            'countries' => CountryResource::collection(Country::all()),
            'notifications' => [
                'list' => UserNotificationResource::collection($request->user()->notifications()->limit(5)->get()),
                'unread_count' => $request->user()->notifications()->where('read_at', NULL)->count()
            ]
        ];

        // Fix
        if ($request->user()->can('root')) {
        }
        $data['admins'] = User::select('id', 'name AS label')->where('role', 'admin')->get();
        $data['abas_domains'] = AbasDomain::select('id', 'name AS label')->get();
        $data['abas_sub_domains'] = AbasSubDomainListResource::collection(AbasSubDomain::all());

        $categories = [];
        foreach (config('enums.abas_abas_sub_domains_categories') as $cat) {
            $categories[] = [
                'id' => $cat,
                'label' => __($cat)
            ];
        }

        $data['abas_sub_domains_categories'] = $categories;

        $data['leiter_tables_types'] = config('enums.leiter_tables_types');

        return $data;
    }
}
