<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/5
 * Time: 10:51
 */

namespace app\index\model;
use think\Model;
use think\Db;
class Cate extends  Model{

    /**
     *
     * 查询顶级分类
     */

    static public function getTopCate(){
        $data = db('cate')->where(['cate_pid'=>0])->select();
        return $data??false;
    }

    /**
     * 查询一级分类
     */

    static public function getFirCate(){
        $data = db('cate')->where(['cate_level'=>1])->select();
        return $data??false;
    }



    /**
     * 获取所有分类信息
     */
    static public function getCate() {
        //获取顶级分类
        $data = self::getTop();
        //获取子分类
        foreach ($data as $key => $value) {
            $arr[] = [
                'top' => $value,
                'lis' => self::getChild($value['cate_id']),
            ];
        }
        // dump($arr);exit;
        return $arr;
    }

    /**
     * 获取所有顶级分类
     */
    static public function getTop() {
        $data = Db::name('cate')->where('cate_pid', 'eq', 0)->select();
        if (!$data || empty($data)) {
            return null;
        }
        return $data;
    }
    /**
     * 根据 id 获取子分类
     */
    static public function getChild($id) {
        $data = Db::name('cate')->where('cate_pid', 'eq', $id)->select();
        if (!$data || empty($data)) {
            return null;
        }
        return $data;
    }

}