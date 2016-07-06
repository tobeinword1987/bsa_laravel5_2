<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Lib\ShortenUrl;
use App\Lib\Smartphone;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Auto binding
        $this->app->bind('ShortenUrl',ShortenUrl::class );

        $this->app->bind('Smartphone',Smartphone::class );
    }
}
