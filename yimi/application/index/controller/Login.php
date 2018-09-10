<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 15:39
 */

namespace app\index\controller;
use app\index\model\Member;
use app\index\model\Cart;
use think\Loader;
use sms\api_demo\SmsDemo;
class Login extends Base{

    /*
     * 登录
     */
    public function login(){
        if(request()->isPost()){
            $data = [
                'username'=>input('username'),
                'password'=>input('password'),
            ];
            //执行登录
            $result = Member::login($data);
            if($result['status'] == 'success'){
                //登录成功以后 --把cookie里面的商品加入到表中
                $res = Cart::cookieToCart();
                //登录成功，先跳到首页去
                $next_url = session('next_url');
                if($next_url){
                    //清空next_url
                    session('next_url',null);
                    return $this->redirect($next_url);
                }else{
                    return $this->success($result['msg'],url('Index/index'));
                }

            }else{
                return $this->error($result['msg']);
            }
        }
        return $this->fetch();
    }

    /***
     * 注册
     */





    public function register(){
        if(request()->isPost()){
            $data = [
                'username'=>input('phone'),
                'password'=>input('password'),
                'repassword'=>input('repassword'),
            ];
            //验证

            $validate = \think\Loader::validate('Member');

            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }

            //添加到数据库
            $result = Member::register($data);
            if($result['status'] == 'success'){
                return $this->success('注册成功',url('Login/login'));
            }else{
                return $this->error('注册失败');
            }
        }
        return $this->fetch('regist');
    }

    /**
     *
     * 发送短信验证码
     */

    public function getSmsCode(){
        header('Content-Type: text/plain; charset=utf-8');
        //$smsg = new \sms\api_demo\SmsDemo('LTAIn71vbjVWae60','WemyB5cGkNNsusjemwFMFBqcBJ8foY ');//第一种，完全限定名称
        //$sms = new SmsDemo('LTAIn71vbjVWae60','WemyB5cGkNNsusjemwFMFBqcBJ8foY ');//第二种
        //Loader::import('sms.api_demo.SmsDemo');//第三种，导入类
        import('sms.api_demo.SmsDemo');//助手函数
        $sms = new SmsDemo('LTAIn71vbjVWae60','WemyB5cGkNNsusjemwFMFBqcBJ8foY');
        $mobile = input('mobile');
        //验证
        $response = $sms->sendSms(
            "星月舞", // 短信签名
            "SMS_92950001", // 短信模板编号
            "$mobile", // 短信接收者
            Array(  // 短信模板中字段的值
                    "code"=>"12345",//验证码----自己生成
                    //"product"=>"dsd"
            ),
            "123"//流水号
        );
      $response = (array)$response;
      return json([
          'msg'=>$response['Message'],
          'code'=>$response['Code'],
      ]);
      //dump($response);
    }

    /**
     *
     * 退出登录
     */

    public function logout(){
        session('index',null);
        cookie('cart',null);
        return $this->redirect('Index/index');
    }
}