<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * 
     *
     * @var array
     */
    // protected $policies = [
    //     //
    // ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define(function (User $user, string $routeName){
            return $user->hasPermissionTo($routeName);
        });

        Gate::before(function (User $user, $ability){
            return $user->hasRole('developer') ? true : null;
        });
    }
}
