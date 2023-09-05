<?php

namespace App\Repositories;

use App\DTOS\BlogDto;
use App\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{


    public function create(BlogDto $blogDto)
    {
        return $this->model->create([
            'description' => $blogDto->title,
            'title' => $blogDto->title
        ])->toArray();
    }

}
