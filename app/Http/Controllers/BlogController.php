<?php

namespace App\Http\Controllers;

use App\DTOS\BlogDto;
use App\Http\Requests\CreateBlogRequest;
use App\Interfaces\BlogRepositoryInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct(protected BlogRepositoryInterface $blogRepository)
    {

    }

    public function store(CreateBlogRequest $blogRequest)
    {
        return $this->blogRepository->create(BlogDto::fromRequest($blogRequest));
    }

    public function show(Request $request, $id)
    {
        return $this->blogRepository->find($id);
    }
}
