<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2019-12-25
 * Time: 09:29
 */

namespace Touge\LaravelDict\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'touge-laravel-dict');


        $this->loadRoutesFrom( __DIR__ . '/../routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../../config' => config_path()], 'touge-laravel-config');
            $this->publishes([__DIR__.'/../../resources/views' => resource_path('views/vendor/touge-laravel-dict')],           'touge-laravel-views');
            $this->publishes([__DIR__.'/../../resources/assets' => public_path('vendor/touge-laravel-dict')], 'touge-laravel-assets');
        }
    }
}