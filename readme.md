# Laravel Dict

## 关于本包

本包自动生成数据字典

## 安装
```
composer require touge/laravel-dict
```

## 创建配置文件
```
php artisan vendor:publish --provider="Touge\LaravelDict\Providers\ModuleServiceProvider"
```
执行命令后会生成以下文件夹：
```
public/vendor/touge-laravel-dict
resources/views/vendor/touge-laravel-dict
```
以及配置文件：
```
config/touge-laravel-dict.php
```

可以按需修改模板和配置文件

