<?php
namespace App\Repositories\Role;

use App\Models\Role;
use App\Http\Requests\RoleRequest;

class RoleRepository {
    public function getRoleById($id)
    {
        return Role::find($id);
    }

    public function getAllRole()
    {
        return Role::all();
    }

    public function create(RoleRequest $request)
    {
        $role = new Role([
            "name" => $request->get('name'),
        ]);

        $role->save();

        $role->permissions()->attach($request->get('permissions'));

        return $role;
    }

    public function update(RoleRequest $request, $id)
    {
        $role = $this->getRoleById($id);

        $role->name = $request->get('name');

        $role->save();

        $role->permissions()->sync($request->get('permissions'));

        return $role;
    }
}
