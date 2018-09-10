<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 16:32
 */

namespace app\admin\controller;
use app\admin\model\Manager as ManagerModel;
class Manager extends Base{

    /*
     * 管理员列表
     * */
    public function index(){
        $data = ManagerModel::getManagerData();
        $this->assign('data',$data);
        return $this->fetch('list');
    }
    /*
     * 添加管理员页面
     * */
    public function add(){
        return $this->fetch();
    }

    /*
     * 执行添加管理员操作
     *
     */

    public function doAdd(){
        $data = [
            'manager_name'=>input('manager_name'),
            'password'=>input('password'),
        ];

        //验证

        $validate = \think\Loader::validate('Manager');

        if(!$validate->scene('add')->check($data)){
            return $this->error($validate->getError());
        }

        $data['password'] = md5($data['password']);
        $data['create_time'] = time();
        //执行添加操作
        $res = ManagerModel::addManager($data);
        if(!$res){
            return $this->error('添加管理员失败');
        }

        return $this->success('添加管理员成功',url('index'));
    }

    /***
     *
     * 修改页面
     *
     */

    public function edit(){
        $manager_id = input('manager_id');
        //查询数据
        $data = ManagerModel::getManagerById($manager_id);
        $this->assign('data',$data);
        return $this->fetch();
    }

    /**
     *
     * 执行修改
     */
    public function doEdit(){
        $password = input('password');
        $data = [
            'manager_id'=>input('manager_id'),
            'manager_name'=>input('manager_name'),
            'is_lock'=>input('is_lock'),
        ];

        //验证
        $validate = \think\Loader::validate('Manager');

        if(!$validate->scene('edit')->check($data)){
            return $this->error($validate->getError());
        }

        //如果密码有值，则修改密码
        if($password && $password != ''){
            $data['password'] = md5($password);
        }
        //修改数据
        $res = ManagerModel::editManager($data);
        if(!$res){
            return $this->error('修改失败');
        }else{
            return $this->success('修改成功',url('index'));
        }
    }

    /**
     *
     * 删除管理员
     *
     */
    public function delete(){
        $manager_id = input('manager_id');
        //超级管理员不能删除
        if($manager_id == 1){
            return $this->error('超级管理员不能被删除');
        }
        //执行删除
        $res = ManagerModel::del($manager_id);
        if(!$res){
            return $this->error('删除失败');
        }else{
            return $this->success('删除成功',url('index'));
        }
    }


    /*
     * 退出登录
     *
     * */
    public function logout(){
        session('admin',null);
        return $this->success('退出成功',url('Login/index'));
    }
}