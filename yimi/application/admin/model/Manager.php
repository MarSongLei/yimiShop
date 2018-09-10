<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:26
 */

namespace app\admin\model;

use think\Model;

class Manager extends Model {

    /*
     * 登录
     * @param array $data
     * return array
     *
     * */
    static public function checkLogin($data) {
        $response = [
            'status' => 'error',
            'msg'    => '',
        ];
        if (!$data['manager_name'] || !$data['password']) {
            $response['msg'] = '用户名或密码不能为空';

            return $response;
        }
        //判断用户是否存在
        $userInfo = db('manager')->where(['manager_name' => $data['manager_name']])->find();
        if (empty($userInfo) || !$userInfo) {
            $response['msg'] = '用户名或密码错误';

            return $response;
        }
        //判断密码
        if (md5($data['password']) != $userInfo['password']) {
            $response['msg'] = '用户名或密码错误';

            return $response;
        }
        //判断是不是冻结账号
        if($userInfo['is_lock'] == 1){
            $response['msg'] = '该账号已被冻结';
            return $response;
        }
        // 写入session
        session('admin', $userInfo);

        $response['status'] = 'success';
        $response['msg']    = '登录成功,正在跳转...';

        return $response;
    }

    /**
     *
     * 添加管理员
     */

    static public function addManager($data) {
        $res = db('manager')->insert($data);

        return $res ?? false;
    }

    /**
     * 查询所有管理员数据
     */

    static public function getManagerData() {
        $data = db('manager')->paginate(5);

        return $data;
    }

    /***
     *
     * 通过主键查询数据
     */

    static public function getManagerById($manager_id) {
        $data = db('manager')->find($manager_id);

        return $data ?? false;
    }
    /**
     *
     * 修改管理员数据
     */

    static public function editManager($data){
        $res = db('manager')->update($data);
        return $res === false?false:true;
    }
    /***
     *
     * 删除
     */

    static public function del($manager_id){
        $res = db('manager')->delete($manager_id);
        return $res??false;
    }
}