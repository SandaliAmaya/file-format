<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Cookie;


class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(UserLoginRequest $request)
    {
        try {
            $result = $this->userService->login($request->validated());
            if (!$result) {
                return response()->responseFormat(401, true, 'Unauthorized', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully logged in', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }

    public function register(UserRegisterRequest $request)
    {
        try {
            $result = $this->userService->register($request->validated());
            if (!$result) {
                return response()->responseFormat(401, true, 'Failed to create the new user', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully created the new user', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }
}
