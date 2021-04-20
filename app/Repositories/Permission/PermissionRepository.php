<?php
namespace App\Repositories\Permission;

use App\Models\Permission;

class PermissionRepository {
    public function getPermissionById($id)
    {
        return Permission::find($id);
    }

    public function getAllPermission()
    {
        return Permission::all();
    }
}
