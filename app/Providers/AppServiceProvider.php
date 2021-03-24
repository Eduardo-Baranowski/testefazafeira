<?php

namespace App\Providers;

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
        //
        $this->app->bind(
            'App\Repositories\Contracts\ProductRepositoryInterface',
            'App\Repositories\Eloquent\ProductRepository',
        );
        $this->app->bind(
            'App\Repositories\Contracts\ListRepositoryInterface',
            'App\Repositories\Eloquent\ListRepository',
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProductUserRepositoryInterface',
            'App\Repositories\Eloquent\ProductUserRepository'
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
