<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2019-12-25
 * Time: 09:59
 */

namespace Touge\LaravelDict\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DictController extends Controller
{
    /**
     * 读取数据库信息
     */
    private function initTablesData()
    {
        //获取数据库表名称列表
        $tables = DB::select('SHOW TABLE STATUS ');
        foreach ($tables as $key => $table) {
            //获取改表的所有字段信息
            $columns = DB::select("SHOW FULL FIELDS FROM `" . $table->Name . "`");
            $table->columns = $columns;
            $tables[$key] = $table;
        }
        return $tables;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = $this->initTablesData();
        return view('touge-laravel-dict::index', compact('tables'));
    }
}