<?php

namespace App\Providers;

use App\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;
use App\Repositories\BlogRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BlogRepositoryInterface::class,function (){
            return new BlogRepository(new Blog());
        });

//        $this->app->bind(BlogRepositoryInterface::class,BlogRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
