<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Brackets;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('brackets', function($app) {
            return new Brackets();
        });
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
