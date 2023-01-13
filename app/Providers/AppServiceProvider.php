<?php

namespace App\Providers;

use App\Repositories\Interfaces\TagRepository;
use App\Repositories\TagRepositoryEloquent;
use Illuminate\Support\Facades\URL;
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
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TagRepository::class, TagRepositoryEloquent::class);
    }
}
