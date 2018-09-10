<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 16:20
 */

namespace app\index\controller;

class Order extends Base{

    public function index(){
        return $this->fetch();
    }
}