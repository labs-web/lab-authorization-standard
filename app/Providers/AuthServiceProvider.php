<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        Gate::define('create-Task', function ($user) {
            return $user->role == 'project-leader';
        });
        Gate::define('store-Task', function ($user) {
            return $user->role == 'project-leader';
        });
        Gate::define('edit-Task', function ($user) {
            return $user->role == 'project-leader';
        });
        Gate::define('update-Task', function ($user) {
            return $user->role == 'project-leader';
        });
        Gate::define('destroy-Task', function ($user) {
            return $user->role == 'project-leader';
        });
        Gate::define('index-Task', function ($user) {
            return $user ;
        });
        
    }

}
