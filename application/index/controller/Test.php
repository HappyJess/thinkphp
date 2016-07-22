<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/22
 * Time: 11:24
 */
namespace app\index\controller;

use think\Controller;

class Test extends Controller
{

    protected $beforeActionList = [
        'first',
        'second' => ['except' => 'hello'],
        'three' => ['only' => 'hello,data'],
    ];

    protected function first()
    {
        echo 'first<br/>';
    }

    protected function second()
    {
        echo 'second<br/>';
    }

    protected function three()
    {
        echo 'three<br/>';
    }

    public function hello()
    {
        return 'hello';
    }

    public function data()
    {
        return 'data';
    }

    public function test()
    {
        return 'data';
    }
}