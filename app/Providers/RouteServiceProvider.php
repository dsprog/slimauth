<?php

namespace Dsprog\Providers;

use Dsprog\Support\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::setup($this->app);
    }

    public function boot()
    {
        $app = Route::$app;
        require routes_path('web.php');
    }
}