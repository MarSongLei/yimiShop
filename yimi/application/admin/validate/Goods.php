<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 14:20
 */

namespace app\admin\validate;

use think\Validate;

class Goods extends Validate {

    //验证规则
    protected $rule = [
        'goods_name' => 'require|unique:goods',
        'cate_id' => 'require',
        'keywords' => 'require',
        'desc' => 'require',
        'store' => 'require|regex:/^\+?[1-9]\d*$/',
        'content' => 'require',
        'market_price' => 'require|egt:10',
        'sell_price' => 'require|egt:10',
    ];

    //提示文字
    protected $message = [
        'goods_name.require' => '商品名不能为空',
        'goods_name.unique'  => '商品名称不能重复',
        'cate_id.require'  => '必须选择分类',
        'keywords.require' => '关键字不能为空',
        'desc.require' => '商品简介不能为空',
        'store.require' => '商品库存不能为空',
        'store.regex' => '商品库存必须是正整数',
        'store.number' => '商品库存必须为数字',
        'content.require' => '商品详情不能为空',
        'market_price.require' => '商品市场价不能为空',
        'market_price.egt' => '商品市场价必须大于等于10',
        'sell_price.require' => '商品市场价不能为空',
        'sell_price.egt' => '商品销售价必须大于等于10',
    ];

    //验证场景
    protected $scene = [
        'add'  =>  ['goods_name','cate_id','keywords','desc','store','content','market_price','sell_price'],
        'edit'  =>  ['goods_name','cate_id','keywords','desc','store','content','market_price','sell_price'],
    ];
}