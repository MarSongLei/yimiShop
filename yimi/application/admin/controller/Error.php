<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:04
 */

namespace app\admin\controller;

use think\Controller;

class Error extends Controller{


    public function _empty(){

        return $this->error('非法访问');
    }
}