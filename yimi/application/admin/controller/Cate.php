<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 9:48
 */

namespace app\admin\controller;
use app\admin\model\Cate as CateModel;
class Cate extends Base{

    /***
     * @return mixed
     *
     * 前置操作
     */

    protected $beforeActionList = [
        //'limit',
    ];

    protected function limit(){
        echo 'limit';
    }


    public function index(){
        $data = CateModel::getCateData();
        $this->assign('data',$data);
        return $this->fetch('list');
    }

    /**
     *
     *
     * 添加顶级分类
     */

    public function addTopCate(){
        if(request()->isPost()){
           $data = [
               'cate_name'=>input('cate_name'),
           ];
            //验证

            $validate = \think\Loader::validate('Cate');

            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }

            //添加数据
            $result = CateModel::addTopCate($data);
            if(!$result){
                return $this->error('添加失败');
            }

            return $this->success('添加成功',url('Cate/index'));
        }
        return $this->fetch('add');

    }

    /**
     *
     * 添加子分类
     */

    public function addCate(){
        $cate_id = input('cate_id');
        $cateData = CateModel::getCateById($cate_id);
        $this->assign('cateData',$cateData);
        return $this->fetch();
    }

    /**
     *
     * 执行添加子分类的操作
     *
     */

    public function doAddCate(){
        $cate_id = input('cate_id');
        $cate_path = input('cate_path');
        $cate_level = input('cate_level');
        //子类的pid
        $pid = $cate_id;//子类的pid就是父类的id
        $level = $cate_level + 1;//子类的level 就是父类的level +1
        $data = [
            'cate_name'=>input('cate_name'),
            'cate_pid' =>$pid,
            'path'=>$cate_path,//父类的path
            'cate_level'=>$level,
        ];

        //添加数据库
        $res = CateModel::addCate($data);
        if(!$res){
            return $this->error('添加失败');
        }else{
            return $this->success('添加成功',url('Cate/index'));
        }
    }

    /**
     *
     * 修改
     */

    public function update(){
        $cate_id = input('cate_id');
        $data = CateModel::getCateById($cate_id);
        $this->assign('data',$data);
        return $this->fetch();
    }

    /**
     * 执行修改的操作
     */

    public function doUpdate(){
        $data = [
            'cate_id'=>input('cate_id'),
            'cate_name'=>input('cate_name'),
        ];
        //验证

        $validate = \think\Loader::validate('Cate');

        if(!$validate->scene('edit')->check($data)){
            return $this->error($validate->getError());
        }

        //修改数据
        $result = CateModel::updateCate($data);
        if($result){
            return $this->success('修改成功',url('Cate/index'));
        }else{
            return $this->error('修改失败');
        }
    }
    /**
     *
     * 删除操作
     */

    public function delete(){
        $cate_id = input('cate_id');
        //删除
        $data = CateModel::del($cate_id);
        if($data['status'] == 'success'){
            return $this->success($data['msg'],url('Cate/index'));
        }else{
            return $this->error($data['msg']);
        }
    }

    /***
     *
     * 添加分类  集成添加顶级分类和子分类
     */

    public function addAll(){
        if(request()->isPost()){
            $arr = [
                'cate_id' => input('cate_id'),//父类的id
                'cate_name' => input('cate_name'),
            ];

            $res = CateModel::addAllCate($arr);
            if(!$res){
                return $this->error('添加失败');
            }else{
                return $this->success('添加成功',url('index'));
            }
        }
        //查询所有分类
        $data = CateModel::newCateData();
        $this->assign('data',$data);
        return $this->fetch();
    }

}