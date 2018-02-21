<?php

namespace Aheenam\LaravelCollectionAddon;

use Illuminate\Support\ServiceProvider;

class LaravelCollectionAddonServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/macros/ContainsAll.php';
    }
}
