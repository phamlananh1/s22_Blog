<?php

namespace App\Providers;

use App\Repositories\BlogRepository;
use App\Repositories\Impl\BlogRepositoryImpl;
use App\Services\BlogService;
use App\Services\Impl\BlogServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            BlogRepository::class,
            BlogRepositoryImpl::class
        );
        $this->app->singleton(
            BlogService::class,
            BlogServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
