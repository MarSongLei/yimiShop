<?php
namespace app\index\model;
use think\Model;
class Detail extends Model{
//    产品详情页数据处理
    static public function  index($id){
        $data=db('goods')
            ->alias('g')
            ->field('g.goods_name,g.desc,g.sell_price,i.image_b_url,i.image_s_url')
            ->join('image i', 'g.goods_id=i.goods_id')
            ->select($id);
        return $data;
    }
}