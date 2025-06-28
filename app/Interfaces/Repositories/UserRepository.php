<?php

namespace App\Interfaces\Repositories;

use App\Models\User;

interface UserRepository
{
    public function all(): array;
    public function find(int $id): ?User;
    public function create(array $data): User;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}