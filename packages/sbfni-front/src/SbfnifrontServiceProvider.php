<?php

namespace Breakit\Sbfni\Sbfnifront;

use Illuminate\Support\ServiceProvider;

class SbfnifrontServiceProvider extends ServiceProvider
{
    public function boot()
    {
    $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
    $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    $this->loadViewsFrom(__DIR__ . '/resources/views', 'sbfnifront');

    $this->commands([
        ##InstallationCommandClass##
    ]);
    
    ##||ANOTHERCOMPONENT||##
    
    }
    public function register()
    { }
}