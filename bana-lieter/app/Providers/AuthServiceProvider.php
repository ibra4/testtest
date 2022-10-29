<?php

namespace App\Providers;

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
    }
}
