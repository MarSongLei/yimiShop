<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 10:16
 */

namespace app\index\controller;

use think\Controller;

class Email extends Controller{

        public function index(){
            //获取配置密码
            $email = config('email');
            $password = $email['password'];
            $mail = new \Nette\Mail\Message;
            $mail->setFrom('qi_zhengning@163.com')//发送人邮箱
                ->addTo('303064387@qq.com')
                ->addTo('15670278332@163.com')
                ->setSubject('测试邮件发送')
                ->setBody("妹子，你好！");
            //设置邮件发送服务器
            $mailer = new \Nette\Mail\SmtpMailer([
                'host' => 'smtp.163.com',
                'username' => 'qi_zhengning@163.com',
                'password' => $password,
                //'secure' => 'ssl',
                /*'context' =>  [
                    'ssl' => [
                        'capath' => '/path/to/my/trusted/ca/folder',
                    ],
                ],*/
            ]);
            $res = $mailer->send($mail);
            dump($res);exit;
        }


        public function email(){
            /**
             * tp5邮件
             * @param
             * @author staitc7 <static7@qq.com>
             * @return mixed
             */
                $toemail='624159426@qq.com';
                $name='624159426';
                $subject='QQ邮件发送测试';
                $content='恭喜你，邮件测试成功。';
                dump(send_mail($toemail,$name,$subject,$content));exit;
        }
}