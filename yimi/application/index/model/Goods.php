<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 9:11
 */

namespace app\index\model;
use think\Model;

class Goods extends Model{
    /**
     * 获得所有商品的数据
     *
     */
    static public function getGoods(){
        $data = db('goods')
            ->alias('g')
            ->field('g.*,i.image_m_url')
            ->limit(8)
            ->join('image i','g.goods_id = i.goods_id','left')
            ->where(['i.is_face'=>1,'g.marketable'=>1,'g.recycle'=>0])
            ->select();

        //echo db()->getLastSql();exit;
        return $data;
    }
//    新到尖货
    static public function newGoods(){
        $dataNew= db('goods')
            ->alias('g')
            ->field('g.*,i.image_m_url')
            ->limit(8)
            ->join('image i','g.goods_id = i.goods_id','left')
            ->join('cate c','g.cate_id=c.cate_id','left')
            ->where(['i.is_face'=>1,'c.cate_path'=>1,'g.recycle'=>0])
            ->order('desc')
            ->select();

        //echo db()->getLastSql();exit;
        return $dataNew;
    }
//    安全水果
    static public function safeGoods(){
        $dataSafe= db('goods')
            ->alias('g')
            ->field('g.*,i.image_m_url')
            ->limit(8)
            ->join('image i','g.goods_id = i.goods_id','left')
            ->join('cate c','g.cate_id=c.cate_id','left')
            ->where(['i.is_face'=>1,'c.cate_path'=>12,'g.recycle'=>0])
            ->order('desc')
            ->select();

        //echo db()->getLastSql();exit;
        return $dataSafe;
    }
    /*
     * 四时蔬菜
     * */
    static public function vegGoods(){
        $dataVeg= db('goods')
            ->alias('g')
            ->field('g.*,i.image_m_url')
            ->limit(8)
            ->join('image i','g.goods_id = i.goods_id','left')
            ->join('cate c','g.cate_id=c.cate_id','left')
            ->where(['i.is_face'=>1,'c.cate_path'=>1,'g.recycle'=>0])
            ->order('desc')
            ->select();

        //echo db()->getLastSql();exit;
        return $dataVeg;
    }
    /*
     * 肉禽蛋类
     * */
    static public function meatGoods(){
        $dataMeat= db('goods')
            ->alias('g')
            ->field('g.*,i.image_m_url')
            ->limit(8)
            ->join('image i','g.goods_id = i.goods_id','left')
            ->join('cate c','g.cate_id=c.cate_id','left')
            ->where(['i.is_face'=>1,'c.cate_path'=>17,'g.recycle'=>0])
            ->order('desc')
            ->select();

        //echo db()->getLastSql();exit;
        return $dataMeat;
    }
    /*
     * 粮油酱醋
     * */
    static public function miceGoods(){
        $dataMice= db('goods')
            ->alias('g')
            ->field('g.*,i.image_m_url')
            ->limit(8)
            ->join('image i','g.goods_id = i.goods_id','left')
            ->join('cate c','g.cate_id=c.cate_id','left')
            ->where(['i.is_face'=>1,'c.cate_path'=>65,'g.recycle'=>0])
            ->order('desc')
            ->select();

        //echo db()->getLastSql();exit;
        return $dataMice;
    }
    /**
     * 通过 goods_id查询商品数据
     */
    static public function goodsItem($goods_id){
        $data = db('goods')
            ->alias('g')
            ->field('g.*,i.*')
            ->join('image i','g.goods_id = i.goods_id','left')
            ->where(['g.goods_id'=>$goods_id,'g.marketable'=>1,'g.recycle'=>0])
            ->select();
//        echo db()->getLastSql();exit;
        return $data;
    }
    /**
     *
     * 通过商品 goods_ids 查询商品数据
     */
    static public function goodsItems($goods_ids){
        $data = db('goods')
            ->alias('g')
            ->field('g.*,i.image_s_url')
            ->join('image i','g.goods_id = i.goods_id','left')
            ->where('g.goods_id','in',$goods_ids)
            ->where(['i.is_face'=>1,'g.marketable'=>1,'g.recycle'=>0])
            ->select();
        //echo db()->getLastSql();exit;
        return $data;
    }


    static public function seletedGoods($member_id){
        $data = db('cart')->where(['member_id'=>$member_id,'selected'=>1])->select();
        return $data??false;
    }

    /**
     * 根据member_id 查询给会员自己所有的商品
     *
     */

    static public function goodsByMemberId($member_id){
        $data = db('cart')->where(['member_id'=>$member_id])->select();
        return $data??false;
    }
}