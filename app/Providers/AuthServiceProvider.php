<?php

namespace App\Providers;

use App\Models\Examinee;
use App\Models\Reports\ReportInterface;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('root', function (User $user) {
            if ($user->id === 1) return true;
            return $user->hasRole('root');
        });

        Gate::define('admin', function (User $user) {
            if ($user->id === 1) return true;
            return $user->hasRole('admin');
        });

        Gate::define('sub_admin', function (User $user) {
            if ($user->id === 1) return true;
            return $user->hasRole('sub_admin');
        });

        Gate::define('show_examinees', function (User $user) {
            if ($user->id === 1) return true;
            return $user->hasAnyRole(['admin', 'sub_admin']);
        });

        Gate::define('admin_or_sub_admin', function (User $user) {
            if ($user->id === 1) return true;
            return $user->hasRole('sub_admin') || $user->hasRole('admin');
        });

        Gate::define('view-report', function (User $user, ReportInterface $report) {
            if ($user->id === 1) return true;
            if ($user->hasRole('admin')) {
                $admins = $user->subAdmins->pluck('id')->toArray() ?? [];
                $admins[] = $user->id;
                return in_array($report->created_by, $admins);
            }
            return $report->created_by == $user->id;
        });
        Gate::define('view-examinee', function (User $user, Examinee $examinee) {
            if ($user->id === 1) return true;
            if ($user->hasRole('admin')) {
                $admins = $user->subAdmins->pluck('id')->toArray() ?? [];
                $admins[] = $user->id;
                return in_array($examinee->created_by, $admins);
            }
            return $examinee->created_by == $user->id;
        });
    }
}
