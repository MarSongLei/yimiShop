<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 15:50
 */

namespace app\index\controller;
use app\index\model\Goods as GoodsModel;
class Goods extends Base{

    public function index(){

        return $this->fetch();
    }
}