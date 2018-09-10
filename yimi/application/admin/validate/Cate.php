<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:20
 */

namespace app\admin\validate;

use think\Validate;

class Cate extends Validate {

    //验证规则
    protected $rule = [
        'cate_name' => 'require|unique:cate',
    ];

    //提示文字
    protected $message = [
        'cate_name.require' => '分类名不能为空',
        'cate_name.unique'  => '分类名称不能重复',
    ];

    //验证场景
    protected $scene = [
        'edit'  =>  ['cate_name'],
        'add'  =>  ['cate_name'],
    ];
}