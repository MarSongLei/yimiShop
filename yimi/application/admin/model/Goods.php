<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/3
 * Time: 9:36
 */

namespace app\admin\model;

use think\Model;

class Goods extends Model {

    /*
     * 查询所有商品
     * */

    static public function allGoods() {
        $data = db('goods')
            ->alias('g')
            ->field('m.manager_name,c.cate_name,i.image_s_url,g.*')
            ->join('manager m','g.create_id = m.manager_id','left')
            ->join('cate c','g.cate_id = c.cate_id','left')
            ->join('image i','g.goods_id = i.goods_id','left')
            ->order('g.sort asc,g.goods_id desc')
            ->where(['i.is_face'=>1])
            ->paginate(5);


        //echo db()->getLastSql();exit;
        return $data;
    }

    /**
     *
     * 添加商品数据 返回主键id
     */

    static public function addGoods($data) {
        //获得登录用户的id
        $admin               = session('admin');
        $data['create_id']   = $admin['manager_id'];
        $data['create_time'] = time();
        $data['update_time'] = time();
        $pk                  = db('goods')->insertGetId($data);

        return $pk ?? false;
    }

    /*
     *
     * 修改商品信息
     *
     * */

    static public function editGoods($data){
        //获得登录用户的id
        $admin               = session('admin');
        $data['create_id']   = $admin['manager_id'];
        $data['update_time'] = time();
        $res                  = db('goods')->update($data);
        return $res === false?false:true;
    }

    /**
     * flag 未false时，删除商品，flag为1时，撤销删除
     * 删除商品和撤销删除
     *
     */

    static public function del($goods_id,$flag=false){
        if(!$flag){
            $recycle = 1;
        }else{
            $recycle = 0;
        }
        $data =[
            'goods_id'=>$goods_id,
            'recycle'=>$recycle
        ];
        $result = db('goods')->update($data);
        return $result??false;
    }

    /**
     *
     * 通过商品goods_id 查询商品数据
     */

    static public function getGoods($goods_id){
        $data = db('goods')->find($goods_id);
        return $data??false;
    }
}