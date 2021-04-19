<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Permission;

class Role extends Model
{
    //
    protected $guarded = [];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, "permission_role", "role_id", "permission_id");
    }
}