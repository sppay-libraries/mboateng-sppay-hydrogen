<?php

namespace MBoateng\Hydrogen;

use Illuminate\Support\ServiceProvider;

class HydrogenServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../config/hydrogen.php' => config_path('hydrogen.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('hydrogen', function ($app) {
            return new Hydrogen($app->make("request"));
        });

        $this->app->alias('hydrogen', "MBoateng\Hydrogen\Hydrogen");
    }

    /**
     * Get the services provided by the provider
     *
     * @return array
     */
    public function provides()
    {
        return ['hydrogen'];
    }
}
