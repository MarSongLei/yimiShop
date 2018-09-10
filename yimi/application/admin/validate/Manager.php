<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:20
 */

namespace app\admin\validate;

use think\Validate;

class Manager extends Validate {

    //验证规则
    protected $rule = [
        'manager_name' => 'require|unique:manager',
        'password'     => 'require',
    ];

    //提示文字
    protected $message = [
        'manager_name.require' => '登录名不能为空',
        'manager_name.unique'  => '管理员名称不能重复',
        'password.require'     => '管理员密码不能为空'
    ];

    //验证场景
    protected $scene = [
        'edit'  =>  ['manager_name'],
        'add'  =>  ['manager_name','password'],
    ];
}