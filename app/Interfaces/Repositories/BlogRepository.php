<?php
namespace App\Interfaces\Repositories;

use App\Models\Blog;

interface BlogRepository{
    public function all();
    public function findById($id): ?Blog;
    public function delete(string $id):bool;
    public function update(array $data, string $id):?Blog;
    public function create(array $data):Blog;
}