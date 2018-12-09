<?php

namespace Saeed\UserActivity;

use Illuminate\Support\ServiceProvider;

class UserActivityServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/database/migrations/' => database_path('migrations'),
                __DIR__ . '/model/' => app_path(),

            ], 'UserActivity');
        }
    }


    public function register()
    {

    }
}