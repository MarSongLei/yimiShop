<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:01
 */

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Manager;

class Login extends Controller{

    public function index(){
        //判断是不是post提交
        if(request()->isPost()){
            $data =[
                'manager_name'=>input('manager_name'),
                'password'=>input('password'),
                'code'=>input('code'),
            ];
            //验证
            if(!$data['code']){
                return $this->error('验证码不能为空');
            }

            if(!captcha_check($data['code'])){
                return $this->error('验证码错误');
            }

            //验证用户名和密码
            $res = Manager::checkLogin($data);
            if($res['status'] == 'success'){
                return $this->success($res['msg'],url('Index/index'));
            }else{
                return $this->error($res['msg']);
            }
        }
        return $this->fetch('login');
    }

    /*
     * 空方法
     * */
    public function _empty(){
        return $this->error('非法访问');
    }
}