<?php

namespace msonowal\LaravelTinify;

use Illuminate\Support\ServiceProvider;
use Tinify\Tinify;

class LaravelTinifyServiceProvider extends ServiceProvider
{

    /**
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Register custom form macros on package start
    * @return void
    */
    public function boot()
    {
        $this->publishConfiguration();
    }

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        $config = __DIR__ . '/../config/tinify.php';
        $this->mergeConfigFrom($config, 'tinify');
        $this->app->bind('tinify', 'msonowal\LaravelTinify\Services\TinifyService');
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return [];
    }

    public function publishConfiguration()
    {
        $this->publishes([
            __DIR__.'/../config/tinify.php' => config_path('tinify.php'),
        ], 'config');
        // $path   =   realpath(__DIR__.'/../config/tinify.php');
        // $this->publishes([$path => config_path('tinify.php')], 'config');
    }
}
