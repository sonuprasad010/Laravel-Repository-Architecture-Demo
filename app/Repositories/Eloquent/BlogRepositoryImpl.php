<?php
namespace App\Repositories\Eloquent;

use App\Interfaces\Repositories\BlogRepository;
use App\Models\Blog;

class BlogRepositoryImpl implements BlogRepository{


    public function __construct(protected Blog $model){
    }

    public function all(){}

    public function create(array $data): Blog{
        return $this->model->create($data);
    }

    public function update(array $data, string $id): Blog|null{
        $blog = $this->model->findOrFail($id);
        $blog->update($data);
        return $blog;
    }

    public function findById($id): Blog|null{
        $blog = $this->model->find($id);
        if(!$blog){
            return null;
        }

        return $blog;
    }

    public function delete($id): bool{
       return $this->model->destroy($id);
    }


}