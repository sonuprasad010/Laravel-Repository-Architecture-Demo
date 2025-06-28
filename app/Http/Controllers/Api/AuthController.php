<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Services\AuthService;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function login(LoginRequest $request)
    {
        $user = $this->service->login($request->validated());

        if (!$user) {
            throw ValidationException::withMessages(["email" => "Invalid credentials"]);
        }

        return $user;
    }

    public function register(RegisterUserRequest $request)
    {
        return $this->service->register($request->validated());
    }
}
