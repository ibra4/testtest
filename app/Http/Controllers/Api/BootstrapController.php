<?php

namespace App\Http\Controllers\Api;

use App\Enums\AbasExamTypesEnum;
use App\Enums\ExamTypesEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\AbasSubDomainListResource;
use App\Http\Resources\CasdSubDomainListResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\UserNotificationResource;
use App\Http\Resources\UserResource;
use App\Models\AbasDomain;
use App\Models\AbasSubDomain;
use App\Models\CasdSubDomain;
use App\Models\Country;
use App\Models\Examinee;
use App\Models\Reports\LeiterReport;
use App\Models\User;
use App\Services\GeneralExamsService;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    /**
     * @var GeneralExamsService
     */
    protected $generalExamsService;

    public function __construct(
        GeneralExamsService $generalExamsService
    ) {
        $this->generalExamsService = $generalExamsService;
    }

    public function getConfig(Request $request)
    {
        $currentUser = $request->user();

        if ($currentUser->hasRole('root')) {
            $total_reports = $this->generalExamsService->getNumberOfTotalReportsForAllCenters();
        }

        if ($currentUser->role == 'admin' || $currentUser->role == 'sub_admin') {
            $total_reports = $this->generalExamsService->getNumberOfTotalReportsForCenter($currentUser);
        }

        $used_leiter_reports =  $currentUser->hasRole('root')
            ? LeiterReport::count()
            : $this->generalExamsService->getNumberOfUsedReportsForCenter($currentUser);

        $data = [
            'statistics' => [
                'total_reports' => $total_reports,
                'used_leiter_reports' => $used_leiter_reports,
                'admins' => User::where('role', 'admin')->count(),
                'sub_admins' => User::where('role', 'sub_admin')->count(),
                'examinees' => Examinee::count()
            ],
            'user' => new UserResource($currentUser),
            'top_admins' => [],
            'countries' => CountryResource::collection(Country::all()),
            'notifications' => [
                'list' => UserNotificationResource::collection($currentUser->notifications()->limit(5)->get()),
                'unread_count' => $currentUser->notifications()->where('read_at', NULL)->count()
            ]
        ];

        // Fix
        if ($currentUser->can('root')) {
        }
        $data['admins'] = User::select('id', 'name AS label')->where('role', 'admin')->get();

        $data['abas_domains'] = AbasDomain::select('id', 'name AS label')->get();
        $data['abas_sub_domains'] = AbasSubDomainListResource::collection(AbasSubDomain::all());

        $data['casd_sub_domains'] = CasdSubDomainListResource::collection(CasdSubDomain::all());

        $categories = [];
        foreach (AbasExamTypesEnum::getAllFields() as $cat) {
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
