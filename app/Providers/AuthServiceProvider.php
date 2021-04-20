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

        Gate::define(config("permission.access.PRODUCT-MANAGE"), function($user){
            return $user->checkPermissionGroupAccess(config("permission.access.PRODUCT-MANAGE"));
        });
        Gate::define(config("permission.access.PRODUCT-LIST"), function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-LIST"));
        });
        Gate::define(config("permission.access.PRODUCT-CREATE"), function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-CREATE"));
        });
        Gate::define(config("permission.access.PRODUCT-SHOW"), function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-SHOW"));
        });
        Gate::define(config("permission.access.PRODUCT-DESTROY"), function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-DESTROY"));
        });
        Gate::define(config("permission.access.PRODUCT-UPDATE"), function($user){
            return $user->checkPermissionAccess(config("permission.access.PRODUCT-UPDATE"));
        });

        //

        Gate::define(config("permission.access.ROLE-MANAGE"), function($user){
            return $user->checkPermissionGroupAccess(config("permission.access.ROLE-MANAGE"));
        });
        Gate::define(config("permission.access.ROLE-LIST"), function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-LIST"));
        });
        Gate::define(config("permission.access.ROLE-CREATE"), function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-CREATE"));
        });
        Gate::define(config("permission.access.ROLE-SHOW"), function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-SHOW"));
        });
        Gate::define(config("permission.access.ROLE-DESTROY"), function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-DESTROY"));
        });
        Gate::define(config("permission.access.ROLE-UPDATE"), function($user){
            return $user->checkPermissionAccess(config("permission.access.ROLE-UPDATE"));
        });

        //

        Gate::define(config("permission.access.USER-MANAGE"), function($user){
            return $user->checkPermissionGroupAccess(config("permission.access.USER-MANAGE"));
        });
        Gate::define(config("permission.access.USER-LIST"), function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-LIST"));
        });
        Gate::define(config("permission.access.USER-CREATE"), function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-CREATE"));
        });
        Gate::define(config("permission.access.USER-SHOW"), function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-SHOW"));
        });
        Gate::define(config("permission.access.USER-DESTROY"), function($user){
            return $user->checkPermissionAccess(config("permission.access.USER-DESTROY"));
        });
        Gate::define(config("permission.access.USER-UPDATE"), function($user){
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
