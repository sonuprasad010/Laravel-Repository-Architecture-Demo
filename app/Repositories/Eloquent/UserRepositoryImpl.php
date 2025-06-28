<?php

namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\UserRepository;
use App\Models\User;

class UserRepositoryImpl implements UserRepository
{
    public function all(): array
    {
        return User::all()->toArray();
    }

    public function find(int $id): ?User
    {
        return User::find($id);
    }

    public function create(array $data): User
    {
        return User::create($data);
    }

    public function update(int $id, array $data): bool
    {
        return User::where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        return User::destroy($id);
    }

    public function paginate(int $perPage = 15)
    {
        return User::paginate($perPage);
    }
}