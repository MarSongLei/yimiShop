<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:06
 */

namespace app\admin\controller;
use think\Controller;

class Base extends Controller{

    //初始化相同于构造方法
    public function _initialize(){
        parent::_initialize();
        $res = $this->isLogin();
        if(!$res){
            return $this->error('请先登录。。。',url('Login/index'));
        }
    }


    /*
     * 空方法
     * */

    public function _empty(){
        return $this->error('非法访问');
    }


    /*
     * 判断是否登录
     *
     * */

    public function isLogin(){
        $admin = session('admin');
        if(!empty($admin)){
            return true;
        }else{
            return false;
        }
    }

}