<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2020-01-20
 * Time: 11:00
 */
namespace Touge\LaravelDict\Models;


use Illuminate\Database\Eloquent\Model;

class Dict extends Model
{
    public function __construct(array $attributes = [])
    {
        $this->setConnection('mysql_dict');
        parent::__construct($attributes);
    }
}