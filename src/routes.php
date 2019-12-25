<?php
    //权限管理

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

Route::group([
    'prefix'        => config('touge-laravel-dict.route.prefix'),
    'namespace'     => config('touge-laravel-dict.route.namespace'),
    'middleware'    => config('touge-laravel-dict.route.middleware'),
], function (Router $router) {
    $router->get('', 'DictController@index');
});
