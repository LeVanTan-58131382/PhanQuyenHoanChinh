<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Services\Role\RoleService;
use App\Services\Permission\PermissionService;

use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    //
    private $role;
    private $roleService;
    private $permissionService;

    public function __construct(Role $role, RoleService $roleService, PermissionService $permissionService)
    {
        $this->role = $role;
        $this->roleService = $roleService;
        $this->permissionService = $permissionService;
    }

    public function list()
    {
        $roles = $this->role->paginate(10);
        return view("admin.manage.roles.list", compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = $this->permissionService->getAllPermission();
        return view("admin.manage.roles.add", compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        
        $this->roleService->create($request);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = $this->roleService->getRoleById($id);
        $permissions = $this->permissionService->getAllPermission();

        return view("admin.manage.roles.update", compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        //
        $this->roleService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
