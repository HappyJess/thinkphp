<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    //访问地址====》  应用》模块》控制器》操作
    public function index()
    {
        // 获取包含域名的完整URL地址
        $this->assign('domain', $this->request->url(true));
        return $this->fetch('index');
    }

    public function hello()
    {
        return "你好啊thinkphp ";
    }

    public function hello1()
    {
        return $this->hello().THINK_VERSION;
    }

    public function data()
    {
        return json_encode(['name' => 'thinkphp', 'status' => 1]);
    }

    public function read()
    {
        return view();
    }
}
