<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 15:09
 */

namespace app\index\controller;
use think\Controller;

class Error extends Controller{

    public function _empty(){
        $this->error('非法访问');
    }
}