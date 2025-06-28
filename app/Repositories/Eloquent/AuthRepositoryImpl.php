<?php
namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\AuthRepository;
use App\Models\User;

class AuthRepositoryImpl implements AuthRepository
{
    public function registerUser(array $data): User
    {
        return User::create($data);
    }

    public function findUserByEmail(string $email): User|null{
        return User::where("email", $email)->first();
    }

}