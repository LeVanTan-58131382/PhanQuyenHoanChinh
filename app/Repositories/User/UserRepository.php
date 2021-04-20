<?php
namespace App\Repositories\User;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use App\Http\Requests\UserRequest;

class UserRepository {
    public function getUserById($id)
    {
        return User::find($id);
    }

    public function getAllUser()
    {
        return User::all();
    }

    public function create(UserRequest $request)
    {
        $user = new User([
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "password" => $request->get('password'),
        ]);

        $user->save();

        $user->roles()->attach($request->get('roles'));

        return $user;
    }

    public function update(UserRequest $request, $id)
    {
        $user = $this->getUserById($id);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->save();

        $user->roles()->sync($request->get('roles'));

        return $user;
    }
}
