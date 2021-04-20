<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use App\Services\User\UserService;
use App\Services\Role\RoleService;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //
    private $user;
    private $userService;
    private $roleService;

    public function __construct(User $user, UserService $userService, RoleService $roleService)
    {
        $this->user = $user;
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    public function list()
    {
        $users = $this->user->paginate(10);
        return view("admin.manage.users.list", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
        return view("admin.manage.users.add", compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        
        $this->userService->create($request);
        
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
        $user = $this->userService->getUserById($id);
        $roles = $this->roleService->getAllRole();

        return view("admin.manage.users.update", compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $this->userService->update($request, $id);
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
