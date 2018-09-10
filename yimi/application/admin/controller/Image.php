<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/4
 * Time: 10:16
 */

namespace app\admin\controller;
use app\admin\model\Image as ImageModel;
use app\admin\model\Goods;
class Image extends Base{

    public function index(){
        $goods_id = input('goods_id');
        //通过商品goods_id 查询给商品所有图片
        $data = ImageModel::getImage($goods_id);
        $this->assign('data',$data);
        $this->assign('goods_id',$goods_id);
        return $this->fetch('list');
    }

    /**
     *
     * 给指定商品添加图片
     */

    public function add(){
        $goods_id = input('goods_id');
        //查询商品数据
        $data = Goods::getGoods($goods_id);
        $this->assign('data',$data);
        return $this->fetch();
    }

    /**
     *
     * 执行添加图片的操作
     */

    public function doAdd(){
       $goods_id = input('goods_id');
        //上传图片
        $file = ImageModel::upload('file');
        if($file['status'] == 'success'){
            $image_url = $file['image_url'];
        }else{
            return $this->error($file['msg']);
        }

        //缩放图片
        $image_b_url = ImageModel::thumb($image_url,650,650);
        $image_m_url = ImageModel::thumb($image_url,240,240);
        $image_s_url = ImageModel::thumb($image_url,120,120);
        //添加图片数据到数据库
        $saveData = [
            'goods_id'=>$goods_id,
            'image_url'=>$image_url,
            'image_b_url'=>$image_b_url,
            'image_m_url'=>$image_m_url,
            'image_s_url'=>$image_s_url,
        ];
        $res = ImageModel::addImage($saveData);
        if($res){
            return $this->success('添加成功',url('index',['goods_id'=>$goods_id]));
        }else{
            return $this->error('添加失败');
        }
    }

    /**
     *
     * 改变商品封面
     */

    public function doFace(){
        $image_id = input('image_id');
        $goods_id = input('goods_id');
        $res = ImageModel::doFace($image_id);
        return $this->redirect('index',['goods_id'=>$goods_id]);
    }

    /**
     *
     * 删除商品图片
     */

    public function delete(){
        $image_id = input('image_id');
        //删除图片表数据和图片
        $result = ImageModel::del($image_id);
        if($result['status'] == 'success'){
            return $this->success('删除成功',url('index',['goods_id'=>$result['goods_id']]));
        }else{
            return $this->error($result['msg']);
        }
    }
}