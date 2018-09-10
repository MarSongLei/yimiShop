<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:26
 */

namespace app\admin\model;

use think\Model;

class Member extends Model {
    
    /**
     *
     * 添加会员
     */

    static public function addMember($data) {
        $res = db('member')->insert($data);

        return $res ?? false;
    }

    /**
     * 查询所有会员数据
     */

    static public function getMemberData() {
        $data = db('member')->paginate(5);

        return $data;
    }

    /***
     *
     * 通过主键查询数据
     */

    static public function getMemberById($member_id) {
        $data = db('member')->find($member_id);

        return $data ?? false;
    }
    /**
     *
     * 修改会员数据
     */

    static public function editMember($data){
        $res = db('member')->update($data);
        return $res === false?false:true;
    }
    /***
     *
     * 删除
     */

    static public function del($member_id){
        $res = db('member')->delete($member_id);
        return $res??false;
    }
}