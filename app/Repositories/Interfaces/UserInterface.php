<?php

namespace App\Repositories\Interfaces;

interface UserInterface
{
    public function login(array $data);
    public function register(array $data);
}
