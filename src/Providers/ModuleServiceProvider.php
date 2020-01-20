<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2019-12-25
 * Time: 09:29
 */

namespace Touge\LaravelDict\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $config_file= 'touge-laravel-dict.php';

        if( !file_exists(config_path($config_file))){
            $dict_config= require  __DIR__ . "/../../config/{$config_file}";
        }else{
            $dict_config= config('touge-laravel-dict');
        }
        $this->app['config']->set('touge-laravel-dict', ['route'=> $dict_config['route']]);
        $this->app['config']->set('database.connections.mysql_dict', $dict_config['mysql_dict']);


        $this->loadViewsFrom(__DIR__.'/../resources/views', 'touge-laravel-dict');
        $this->loadRoutesFrom( __DIR__ . '/../routes.php');


        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../../config' => config_path()], 'touge-laravel-dict-config');
            $this->publishes([__DIR__.'/../../resources/views' => resource_path('views/vendor/touge-laravel-dict')],'touge-laravel-dict-views');
            $this->publishes([__DIR__.'/../../resources/assets' => public_path('vendor/touge-laravel-dict')], 'touge-laravel-dict-assets');
        }
    }

}