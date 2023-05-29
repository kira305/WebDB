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
        //services
        $this->app->singleton(\App\Contracts\Services\MovieFavorite::class, \App\Services\MovieFavorite::class);
        $this->app->singleton(\App\Contracts\Services\Movie::class, \App\Services\Movie::class);
        //repositories
        $this->app->singleton(\App\Contracts\Repositories\MovieFavorite::class, \App\Repositories\MovieFavorite::class);
        $this->app->singleton(\App\Contracts\Repositories\Movie::class, \App\Repositories\Movie::class);
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
