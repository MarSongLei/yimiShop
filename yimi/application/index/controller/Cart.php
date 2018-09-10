<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 16:14
 */

namespace app\index\controller;
use app\index\model\Goods;

class Cart extends Base{
    /*
     * 购物车页面
     */
    public function index(){
        //cookie('cart',null);
        //判断是否登录
        $login = $this->isLogin();
        if($login){
            //已登录
            //直接查表，返回二维数组
            $data = Goods::goodsByMemberId($login['member_id']);
        }else{
            //未登录
            $data = cookie('cart');
            $data = unserialize($data);
        }
        //如果商品数据不为空
        if(!empty($data)){
            //通过二维数据把goods_id拿出来    1,2
            $goods_ids = '';
            foreach($data as $key=>$val){
                $goods_ids .= $val['goods_id'].',';
            }
            $goods_ids = rtrim($goods_ids,',');
            $arr = Goods::goodsItems($goods_ids);
            foreach ($arr as $key=>$val){
                foreach ($data as $k=>$v){
                    if($val['goods_id'] == $v['goods_id']){
                        //把数量放到$arr里面
                        $arr[$key]['goods_num'] = $v['goods_num'];
                    }
                }
            }

            //总计
            $total = '';

            foreach ($arr as $k=>$v){
                $total += $v['sell_price']*$v['goods_num'];
            }
            $data = [
                'total'=>$total,
                'data'=>$arr,
            ];
        }
//        var_dump($data.data);exit;
        $data = $data?$data:[];
        $this->assign('data',$data);
        return $this->fetch();
    }
    /*
     *
     * 结算页面
     */
    public function checkout(){
        //判断是否登录
        $login = $this->isLogin();
        //未登录用户，不能来这里
        if(!$login){
            //下次要跳转的页面
            $next_url = 'Cart/checkout';
            session('next_url',$next_url);
            return $this->redirect('Login/login');
        }
        //没有选中的商品的也不能来这里,直接跳到购物车
        $data = Goods::seletedGoods($login['member_id']);
        if(empty($data) || !$data){
            return $this->redirect('Cart/index');
        }
        return $this->fetch();
    }

    /**
     *
     * 加入购物车
     */

    public function add(){
        $data = [
            'goods_id'=>input('goods_id'),
            'goods_num'=>input('goods_num'),
        ];

        //判断会员是否登录
        $login = $this->isLogin();
        if($login){
            //登录状态--直接添加到数据表cart
            //先查出cart表中的数据
            $res = Goods::goodsByMemberId($login['member_id']);
            $arr = [];
            foreach ($res as $key=>$val){
                $arr[$val['goods_id']] = $val;
            }
            if(array_key_exists($data['goods_id'],$arr)){
                //重复添加--更新数据 update
                $arr[$data['goods_id']]['goods_num'] += $data['goods_num'];
                db('cart')->update($arr[$data['goods_id']]);
            }else{
                //新加数据--insert
                $data['member_id'] = $login['member_id'];
                db('cart')->insert($data);
            }
        }else{
            //未登录状态
            $cart = cookie('cart');
            if(!$cart){
                // cookie里面没商品
                $arr[$data['goods_id']] = $data;
                cookie('cart',serialize($arr));

            }else{
                //cookie里面有商品--返回一个二维数组
                $cart = unserialize($cart);
                //购物车已经有的商品，累加数量
                if(array_key_exists($data['goods_id'],$cart)){
                    $cart[$data['goods_id']]['goods_num'] += $data['goods_num'];
                }else{
                    //给cart数组，增加元素
                    $cart[$data['goods_id']] = $data;
                }


                //存到cookie里面
                cookie('cart',serialize($cart));

            }

        }
        $res = [
            'status'=>'success',
            'msg'=>'添加购物车成功',
        ];
        return json($res);
    }
//   购物车数量处理
    public function minus(){
        cookie('cart',null);
        $data = [
            'goods_id'=>input('goods_id'),
            'goods_num'=>input('goods_num'),
        ];
        //判断会员是否登录
        $login = $this->isLogin();
        if($login){
            //登录状态--直接添加到数据表cart
            //先查出cart表中的数据
            $res = Goods::goodsByMemberId($login['member_id']);
            $arr = [];
            foreach ($res as $key=>$val){
                $arr[$val['goods_id']] = $val;
            }
            if(array_key_exists($data['goods_id'],$arr)){
                //重复添加--更新数据 update
                $arr[$data['goods_id']]['goods_num'] += $data['goods_num'];
                db('cart')->update($arr[$data['goods_id']]);
            }else{
                //新加数据--insert
                $data['member_id'] = $login['member_id'];
                db('cart')->insert($data);
            }
        }else{
            //未登录状态
            $cart = cookie('cart');
            if(!$cart){
                // cookie里面没商品
                $arr[$data['goods_id']] = $data;
                cookie('cart',serialize($arr));

            }else{
                //cookie里面有商品--返回一个二维数组
                $cart = unserialize($cart);
                //购物车已经有的商品，累加数量
                if(array_key_exists($data['goods_id'],$cart)){
                    $cart[$data['goods_id']]['goods_num'] = $data['goods_num'];
                }else{
                    //给cart数组，增加元素
                    $cart[$data['goods_id']] = $data;
                }
                //存到cookie里面
                cookie('cart',serialize($cart));
            }

        }
        $res = [
            'status'=>'success',
//            'msg'=>'添加购物车成功',
        ];
        return json($res);
    }



}