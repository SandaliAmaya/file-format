<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected $userRepo = null;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function login(array $data)
    {
        try {
            $result = $this->userRepo->login($data);
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function register(array $data)
    {
        try {
            $result = $this->userRepo->register($data);
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
