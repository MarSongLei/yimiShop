<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/3
 * Time: 9:33
 */
namespace app\admin\controller;
use app\admin\model\Goods as GoodsModel;
use app\admin\model\Cate;
use app\admin\model\Image;
class Goods extends Base{

    /**
     *
     * 商品列表
     */

    public function index(){
        $data = GoodsModel::allGoods();
        $this->assign('data',$data);
        return $this->fetch('list');
    }

    /**
     *
     * 添加商品
     */
    public function add(){
        if(request()->isPost()){
            //接收参数
            $data = [
                'goods_name'=>input('goods_name'),
                'cate_id'=>input('cate_id'),
                'desc'=>input('desc'),//商品简介
                'keywords'=>input('keywords'),//关键字
                'market_price'=>input('market_price'),//市场价
                'sell_price'=>input('sell_price'),//销售价
                'store'=>input('store'),//库存
                'is_hot'=>input('is_hot'),
                'is_new'=>input('is_new'),
                'sort'=>input('sort'),//排序
                'content'=>input('content'),//商品详情
            ];
            //上架状态
            if(input('marketable') == 'on'){
                $data['marketable'] = 1;
            }else{
                $data['marketable'] = 0;
            }
            //             商品热销
            if(input('is_hot')=='on'){
                $data['is_hot']=1;
            }
            else{
                $data['is_hot']=0;
            }
//              商品新品
            if(input('is_new')=='on'){
                $data['is_new']=1;
            }
            else{
                $data['is_new']=0;
            }
            //判断商品封面
            if($_FILES['file']['tmp_name'] == '' || !$_FILES['file']['tmp_name']){
                return $this->error('必须上传商品封面');
            }
            //验证
            $validate = \think\Loader::validate('Goods');

            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
            //添加商品数据
            $pk = GoodsModel::addGoods($data);
            if(!$pk){
                return $this->error('添加失败');
            }
            //上传图片
            $file = Image::upload('file');
            if($file['status'] == 'success'){
                $image_url = $file['image_url'];
            }else{
                return $this->error($file['msg']);
            }
            //缩放图片
            //120 240 650
            $image_b_url = Image::thumb($image_url,650,650);
            $image_m_url = Image::thumb($image_url,240,240);
            $image_s_url = Image::thumb($image_url,120,120);
            //把所有的图片路径存到数据库
            $imageData = [
                'goods_id'=>$pk,
                'image_url'=>$image_url?$image_url:'',
                'image_b_url'=>$image_b_url?$image_b_url:'',
                'image_m_url'=>$image_m_url?$image_m_url:'',
                'image_s_url'=>$image_s_url?$image_s_url:'',
                'is_face'=>1,//封面
            ];

            $result = Image::addImage($imageData);
            if($result){
                return $this->success('添加成功',url('index'));
            }else{
                return $this->error('添加失败');
            }
        }
        //查询所有分类
        $cateData = Cate::newCateData();
        $this->assign('cateData',$cateData);
        return $this->fetch();
    }

    /**
     *
     * 修改商品
     */

    public function edit(){
        $goods_id = input('goods_id');
        //根据商品goods_id 查询商品信息
        $goodsData = GoodsModel::getGoods($goods_id);
        //查询所有分类
        $cateData = Cate::newCateData();
        $this->assign('cateData',$cateData);
        $this->assign('goodsData',$goodsData);
        return $this->fetch();
    }

    /**
     *
     * 执行修改商品的操作
     */

    public function doEdit(){
        $data = [
            'goods_id'=>input('goods_id'),
            'goods_name'=>input('goods_name'),
            'cate_id'=>input('cate_id'),
            'desc'=>input('desc'),//商品简介
            'keywords'=>input('keywords'),//关键字
            'market_price'=>input('market_price'),//市场价
            'sell_price'=>input('sell_price'),//销售价
            'store'=>input('store'),//库存
            'sort'=>input('sort'),//排序
            'is_new'=>input('is_new'),
            'is_hot'=>input('is_hot'),
            'content'=>input('content'),//商品详情
        ];

        //上架状态
            if(input('marketable') == 'on'){
                $data['marketable'] = 1;
            }else{
                $data['marketable'] = 0;
            }
        //             商品热销
        if(input('is_hot')=='on'){
            $data['is_hot']=1;
        }
        else{
            $data['is_hot']=0;
        }
//              商品新品
        if(input('is_new')=='on'){
            $data['is_new']=1;
        }
        else{
            $data['is_new']=0;
        }
        //验证
        $validate = \think\Loader::validate('Goods');

        if(!$validate->scene('edit')->check($data)){
            return $this->error($validate->getError());
        }
        $result = GoodsModel::editGoods($data);
        if($result){
            return $this->success('修改成功',url('index'));
        }else{
            return $this->error('修改失败');
        }
    }

    /**
     *
     * 删除商品
     */

    public function delete(){
        $goods_id = input('goods_id');

        //删除商品
        $result = GoodsModel::del($goods_id);
        if($result){
            return $this->success('删除成功',url('index'));
        }else{
            return $this->error('删除失败');
        }
    }

    /**
     *
     * 撤销删除
     */

    public function revokeDel(){
        $goods_id = input('goods_id');

        //删除商品
        $result = GoodsModel::del($goods_id,true);
        if($result){
            return $this->success('撤销成功',url('index'));
        }else{
            return $this->error('撤销失败');
        }
    }
}