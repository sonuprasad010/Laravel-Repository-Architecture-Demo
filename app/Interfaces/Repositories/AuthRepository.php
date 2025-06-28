<?php
namespace App\Interfaces\Repositories;

use App\Models\User;

interface AuthRepository
{
    public function registerUser(array $data): User;
    public function findUserByEmail(string $email): ?User;
}