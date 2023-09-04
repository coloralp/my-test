<?php

namespace App\Interfaces;

use App\DTOS\BlogDto;

interface BlogRepositoryInterface
{
    public function create(BlogDto $blogDto);
}
