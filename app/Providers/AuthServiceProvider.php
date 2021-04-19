<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\ProductPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        \App\Models\Post::class => \App\Policies\PostPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies(); 
        // $this->defineGateProduct();
        
        //
        // Gate::define("product-manage", function($user){
        //     return $user->checkPermissionGroupAccess(config("permission.access.PRODUCT-MANAGE"));
        // });
        // Gate::define("product-list", "App/Policies/ProductPolicy@view");
        // Gate::define("product-add", "App/Policies/ProductPolicy@create");
        // Gate::define("product-list", "App/Policies/ProductPolicy@update");
        // Gate::define("product-list", "App/Policies/ProductPolicy@delete");

        Gate::define("product-manage", function($user){
            return $user->checkPermissionGroupAccess(config("permission.access.PRODUCT-MANAGE"));
        });
        Gate::define("product-list", function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-LIST"));
        });
        Gate::define("product-add", function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-ADD"));
        });
        Gate::define("product-detail", function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-DETAIL"));
        });
        Gate::define("product-delete", function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-DELETE"));
        });
        Gate::define("product-update", function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-UPDATE"));
        });

        //

        Gate::define("role-manage", function($user){
            return $user->checkPermissionGroupAccess(config("permission.access.ROLE-MANAGE"));
        });
        Gate::define("role-list", function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-LIST"));
        });
        Gate::define("role-add", function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-ADD"));
        });
        Gate::define("role-detail", function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-DETAIL"));
        });
        Gate::define("role-delete", function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-DELETE"));
        });
        Gate::define("role-update", function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-UPDATE"));
        });

        //

        Gate::define("user-manage", function($user){
            return $user->checkPermissionGroupAccess(config("permission.access.USER-MANAGE"));
        });
        Gate::define("user-list", function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-LIST"));
        });
        Gate::define("user-add", function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-ADD"));
        });
        Gate::define("user-detail", function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-DETAIL"));
        });
        Gate::define("user-delete", function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-DELETE"));
        });
        Gate::define("user-update", function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-UPDATE"));
        });
    }

    // public function defineGateProduct()
    // {
    //     Gate::define("product-manage", function($user){
    //         return $user->checkPermissionGroupAccess(config("permission.access.PRODUCT-MANAGE"));
    //     });
    //     Gate::define("product-list", "App/Policies/ProductPolicy@view");
    //     Gate::define("product-add", "App/Policies/ProductPolicy@create");
    //     Gate::define("product-update", "App/Policies/ProductPolicy@update");
    //     Gate::define("product-delete", "App/Policies/ProductPolicy@delete");
    // }
}
