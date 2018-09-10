<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/3
 * Time: 11:30
 */

namespace app\admin\model;
use think\Model;

class Image extends Model{

    /**
     *
     * 添加图片数据
     */

    static public function addImage($data){
        $data = db('image')->insert($data);
        return $data??false;
    }

    /**
     * @param string input中name的名字  name=file
     * 上传图片
     */

    static public function upload($file){
        $response = [
            'status'=>'error',
            'msg'=>'',
        ];
        $file = request()->file($file);
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            // 成功上传后 获取上传信息
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $image_url =  $info->getSaveName();
            $image_url = '/uploads/'.str_replace('\\','/',$image_url);
            $response['status'] = 'success';
            $response['msg'] = '上传成功';
            $response['image_url'] = $image_url;
            return $response;
        }else{
            // 上传失败获取错误信息
            $response['msg'] = $file->getError();
            return $response;
        }
    }

    /**
     * @param string url
     * 缩放图片
     */

    static public function thumb($url,$width=120,$height=120){
        //打开图片
        $image = \think\Image::open('./'.$url);
        $dir_name = dirname($url);//目录名  /uploads/20170803
        $file_name = basename($url);//文件名 03c8efb05d42196ca227ad5994bcb7fc.jpg
        $save_name = $dir_name.'/'.$width.'_'.$file_name;
        //保存缩略图
        $result = $image->thumb($width,$height)->save('./'.$save_name);
        if(!$result){
            return false;
        }
        //缩放成功返回缩放图片的图片名
        return $save_name;
    }

    /**
     *
     * 通过商品goods_id 查询商品图片
     */

    static public function getImage($goods_id){
        $data = db('image')
                ->alias('i')
                ->field('i.image_id,i.goods_id,i.is_face,i.image_s_url,g.goods_name')
                ->join('goods g','i.goods_id = g.goods_id','left')
                ->where(['g.goods_id'=>$goods_id])
                ->paginate(4);
        //echo db()->getLastSql();exit;
        return $data??false;
    }

    /**
     *
     * 改变商品封面
     */

    static public function doFace($iamge_id){
        //通过image_id 查询图片数据
        $data = db('image')->find($iamge_id);
        $goods_id = $data['goods_id'];
        //把goods_id所对应的所有数据的face字段，都改为0
        $faceData = [
            'is_face'=>0
        ];
        $res = db('image')->where(['goods_id'=>$goods_id])->update($faceData);
        if(!$res){
            return false;
        }
        //把$image_id 对应的数据的face改为1
        $r = db('image')->update(['image_id'=>$iamge_id,'is_face'=>1]);

        return $r??false;
    }

    /**
     *
     * 删除图片表数据和图片
     */

    static public function del($image_id){
        $response = [
            'status'=>'error',
            'msg'=>''
        ];
        if(!$image_id){
            $response['msg'] = '参数错误';
            return $response;
        }
        //删除之前先查出图片路径
        $data = db('image')->find($image_id);
        //如果是封面图片，不能删除
        if($data['is_face'] == 1){
            $response['msg'] = '封面不能删除';
            return $response;
        }
        @unlink('./'.$data['image_url']);
        @unlink('./'.$data['image_b_url']);
        @unlink('./'.$data['image_m_url']);
        @unlink('./'.$data['image_s_url']);
        //删除表中的数据
        $res = db('image')->delete($image_id);
        if(!$res){
            $response['msg'] = '删除失败';
            return $response;
        }
        $response['status'] = 'success';
        $response['goods_id'] = $data['goods_id'];
        $response['msg'] = '删除成功';
        return $response;
    }
}