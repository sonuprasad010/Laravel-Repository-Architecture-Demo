<?php

namespace App\Services;

use App\Interfaces\Repositories\BlogRepository;
use App\Models\Blog;

class BlogService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected BlogRepository $respository)
    {
    }

    public function create($data): Blog
    {
        return $this->respository->create($data);
    }

    public function findById(string $id): ?Blog
    {
        return $this->respository->findById($id);
    }

    public function delete(string|int $blogId): bool
    {
        return $this->respository->delete($blogId);
    }
}
