<?php
namespace App\Services;

use App\Interfaces\Repositories\AuthRepository;
use App\Models\User;
use Auth;

class AuthService
{
    protected AuthRepository $repository;
    public function __construct(AuthRepository $repository){
        $this->repository = $repository;
    }

    public function login(array $credentials): ?array
    {
        if (!Auth::attempt($credentials)) {
            return null;
        }

        $user = Auth::user();
        $token = $user->createToken("authToken")->plainTextToken;
        return [
            "user" => $user,
            "token" => $token
        ];
    }

    public function register(array $credentials): array{
       $this->repository->registerUser($credentials);
       return $this->login(['email'=> $credentials['email'], "password" => $credentials['password']]);
    }
}