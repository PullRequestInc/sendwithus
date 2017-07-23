<?php

namespace PullRequestInc\sendwithus;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;


class SendwithusServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig($this->app);
    }

    /**
     * Setup the config.
     *
     * @param \Illuminate\Contracts\Container\Container $app
     *
     * return void
     */

    public function setupConfig(Container $app)
    {

        $source = realpath($raw = __DIR__ . '/../config/sendwithus.php') ?: $raw;

        if ($app instanceof LaravelApplication && $app->runningInConsole()) {
            $this->publishes([$source => config_path('sendwithus.php')]);
        }
        $this->mergeConfigFrom($source, 'sendwithus');


    }


    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('sendwithus', function (Container $app) {
            $config = $app->config->get('sendwithus');
            return new Client($config);
        });

    }
}
