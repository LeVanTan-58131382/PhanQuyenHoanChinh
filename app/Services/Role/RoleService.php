<?php

namespace App\Services\Role;

use App\Repositories\Role\RoleRepository;
use App\Http\Requests\RoleRequest;

class RoleService{

    private $roleRepository;

    public function __construct(RoleRepository $roleRepository) {
        $this->roleRepository = $roleRepository;
    }

    public function getAllRole()
    {
        return $this->roleRepository->getAllRole();
    }

    public function getRoleById($id)
    {
        return $this->roleRepository->getRoleById($id);
    }

    public function create(RoleRequest $request)
    {
        return $this->roleRepository->create($request);
    }

    public function update(RoleRequest $request, $id)
    {
        return $this->roleRepository->update($request, $id);
    }
}