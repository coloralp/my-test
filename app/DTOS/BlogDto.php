<?php

namespace App\DTOS;

use App\Http\Requests\CreateBlogRequest;

class BlogDto
{


    public function __construct(public string $title, public string $description)
    {

    }

    public static function fromRequest(CreateBlogRequest $request): BlogDto
    {
        return new self(title: $request->validated('title'), description: $request->validated('description'));
    }

}
