<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 14:24
 */

namespace app\index\model;
use think\Model;
use app\index\model\Goods;
class Cart extends Model{
    /**
     *
     * 把cookie里面的商品添加到购物车表中
     */

    static public function cookieToCart(){
        $cart = cookie('cart');
        if(!$cart || $cart == ''){
            return '';
        }
        //查询出该会员购物车表中的数据
        $index = session('index');
        $cart = unserialize($cart);
        //先把member_id放进去
        foreach ($cart as $key=>$val){
            $cart[$key]['member_id'] = $index['member_id'];
        }

        $data = Goods::goodsByMemberId($index['member_id']);
        //把商品的goods_id 作为 数组的键 重新处理购物车表中的数据
        $arr = [];
        if(!empty($data)){
            foreach ($data as $key=>$val){
                $arr[$val['goods_id']] = $val;
            }

            foreach ($cart as $key=>$val){
                //判断cookie里面的商品数据，有没有在购物车表里面
                if(array_key_exists($val['goods_id'],$arr)){
                    $arr[$val['goods_id']]['goods_num'] += $val['goods_num'];
                    //修改数据
                    db('cart')->update($arr[$val['goods_id']]);
                }else{
                    //添加数据
                    db('cart')->insert($cart[$key]);
                }
            }
        }else{
            //购物车表还没有商品直接添加到购物车表
            $res = db('cart')->insertAll($cart);
        }
        cookie('cart',null);
        return true;

    }
}