<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:20
 */

namespace app\index\validate;

use think\Validate;

class Member extends Validate {

    //验证规则
    protected $rule = [
        'username' => 'require|unique:member|regex:/^1[34578]\d{9}$/',
        'password'     => 'require',
    ];

    //提示文字
    protected $message = [
        'username.require' => '用户名不能为空',
        'username.unique'  => '用户名不能重复',
        'username.regex'=>'手机号格式错误',
        'password.require'     => '密码不能为空'
    ];

    //验证场景
    protected $scene = [
        'edit'  =>  ['username'],
        'add'  =>  ['username','password'],
    ];
}