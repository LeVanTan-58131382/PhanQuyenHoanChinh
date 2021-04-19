<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, "role_user", "user_id", "role_id");
    }

    public function checkPermissionAccess($permissionCheckKey)
    {
        
        // Lấy tất cả các quyền của user đang login hệ thống
        $roles = auth()->user()->roles;

        foreach($roles as $role)
        {
            $permissions = $role->permissions;

            if($permissions->contains("key-code-name", $permissionCheckKey))
            {
                return true;
            } 
            
            return false;

        }
    }

    public function checkPermissionGroupAccess($permissionGroupCheckKey)
    {
        // Lấy tất cả các quyền của user đang login hệ thống
        $roles = auth()->user()->roles;

        foreach($roles as $role)
        {
            $permissions = $role->permissions;

            if($permissions->contains("group", $permissionGroupCheckKey))
            {
                return true;
            } 
            
            return false;

        }
    }
}