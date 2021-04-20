<?php

namespace App\Services\Permission;

use App\Repositories\Permission\PermissionRepository;

class PermissionService{

    private $permissionRepository;

    public function __construct(PermissionRepository $permissionRepository) {
        $this->permissionRepository = $permissionRepository;
    }

    public function getAllPermission()
    {
        return $this->permissionRepository->getAllPermission();
    }

    public function getPermissionById($id)
    {
        return $this->permissionRepository->getPermissionById($id);
    }
}