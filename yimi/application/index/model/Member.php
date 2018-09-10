<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/5
 * Time: 9:43
 */

namespace app\index\model;
use think\Model;
class Member extends Model{

    //会员注册

    static public function register($data){
        $response = [
            'status'=>'error',
            'msg'=>''
        ];
        if(empty($data) || !$data){
            $response['msg'] = '参数错误';
            return $response;
        }

        if($data['password'] != $data['repassword']){
            $response['msg'] = '两次密码不一致';
            return $response;
        }

        $arr = [
            'username'=>$data['username'],
            'password'=>md5($data['password']),
            'mobile'=>intval($data['username']),
            'create_time'=>time(),
        ];
        //dump($arr);exit;

        //添加数据
        $result = db('member')->insert($arr);
        if(!$response){
            $response['msg'] = '注册失败';
            return $response;
        }
        $response['status'] = 'success';
        $response['msg'] = '注册成功';
        return $response;
    }

    /**
     *
     * 登录
     */

    static public function login($data){
        $response = [
            'status'=>'error',
            'msg'=>''
        ];
        if(!$data['username'] || $data['username'] == ''){
            $response['msg'] = '用户名不能为空';
            return $response;
        }
        if(!$data['password'] || $data['password'] == ''){
            $response['msg'] = '密码不能为空';
            return $response;
        }
        //查询信息
        $arr = db('member')->where(['mobile'=>$data['username']])->find();
        if(!$arr || empty($arr)){
            $response['msg'] = '账号或密码错误';
            return $response;
        }
        if($arr['password'] != md5($data['password'])){
            $response['msg'] = '账号或密码错误';
            return $response;
        }

        //判断会员状态是否是正常状态
        if($arr['is_lock'] == 1){
            $response['msg'] = '该会员已被冻结，不能登录';
            return $response;
        }

        //写入session
        session('index',$arr);
        $response['status'] = 'success';
        $response['msg'] = '登录成功';
        return $response;
    }
}
