<?php

namespace App\Providers;

use App\Interfaces\Repositories\AuthRepository;
use App\Interfaces\Repositories\BlogRepository;
use App\Repositories\Eloquent\AuthRepositoryImpl;
use App\Repositories\Eloquent\BlogRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AuthRepository::class, AuthRepositoryImpl::class);
        $this->app->bind(BlogRepository::class, BlogRepositoryImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
