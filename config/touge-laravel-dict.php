<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2019-12-25
 * Time: 09:42
 */

return [
    'route' => [
        'prefix' => 'touge-laravel-dict',
        'namespace' => 'Touge\\LaravelDict\\Http\\Controllers',
        'middleware' => ['web'],
    ],
    'mysql_dict'=> [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'dome',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        ]) : [],
    ],
];