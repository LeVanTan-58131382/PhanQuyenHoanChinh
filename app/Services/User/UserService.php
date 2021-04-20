<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use App\Http\Requests\UserRequest;

class UserService{

    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getAllUser()
    {
        return $this->userRepository->getAllUser();
    }

    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }

    public function create(UserRequest $request)
    {
        return $this->userRepository->create($request);
    }

    public function update(UserRequest $request, $id)
    {
        return $this->userRepository->update($request, $id);
    }
}