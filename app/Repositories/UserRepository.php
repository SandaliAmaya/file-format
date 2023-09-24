<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserRepository implements UserInterface
{
    protected $user = null;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login(array $data)
    {
        try {
            $email = $data['email'];
            $password = $data['password'];

            $token = auth()->attempt(['email' => $email, 'password' => $password]);

            if (!$token) {
                return false;
            }

            $user = auth()->user();

            $auth = [
                'user' => $user,
                'authorization' => [
                    'token' => $this->respondWithToken($token)->original,
                    'type' => 'bearer',
                ]
            ];
            return $auth;

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function register(array $data)
    {
        try {
            $user = $this->user->create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
            return $user;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
