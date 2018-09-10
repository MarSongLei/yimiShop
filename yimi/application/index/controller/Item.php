<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 16:04
 */
namespace app\index\controller;
use app\index\model\Goods;
use app\index\model\Detail;
class Item extends Base{

    public function index(){
        $goods_id=input('goods_id');
        $goodsData=db('goods')->find($goods_id);

        $data=Detail::index($goods_id);
        $this->assign('data',$data);
        $arr=array();
        foreach ($data as $key=>$v) {
            $arr[$key] = $v['image_b_url'];
        };
        $arr2=[];
        foreach ($data as $key=>$v) {
            $arr2[$key] = $v['image_s_url'];
        };
        $this->assign('arr',$arr);
        $this->assign('arr2',$arr2);
        $this->assign('goodsData',$goodsData);
//        echo db()->getLastSql();exit;
        return $this->fetch();
    }
}