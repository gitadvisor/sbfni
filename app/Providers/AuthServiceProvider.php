<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

  
    public function boot()
    {
        $this->registerPolicies();


        // Gate::define('create-notice', [NoticePolicy::class, 'create']);

        Gate::define('user-management', function (User $user) {
           
            if ($user->role_id == 1) {
                return true;
            }

            return false;
        });
    }
}
