<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 16:32
 */

namespace app\admin\controller;
use app\admin\model\Member as MemberModel;
class Member extends Base{

    /*
     * 会员列表
     * */
    public function index(){
        $data = MemberModel::getMemberData();
        $this->assign('data',$data);
        return $this->fetch('list');
    }
    /*
     * 添加会员页面
     * */
    public function add(){
        return $this->fetch();
    }

    /*
     * 执行添加会员操作
     *
     */

    public function doAdd(){
        $data = [
            'username'=>input('username'),
            'password'=>input('password'),
        ];

        //验证

        $validate = \think\Loader::validate('index/Member');

        if(!$validate->scene('add')->check($data)){
            return $this->error($validate->getError());
        }
        $data['password'] = md5($data['password']);
        $data['mobile'] = $data['username'];
        $data['create_time'] = time();
        //执行添加操作
        $res = MemberModel::addMember($data);
        if(!$res){
            return $this->error('添加会员失败');
        }

        return $this->success('添加会员成功',url('index'));
    }

    /***
     *
     * 修改页面
     *
     */

    public function edit(){
        $member_id = input('member_id');
        //查询数据
        $data = MemberModel::getMemberById($member_id);
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
            'member_id'=>input('member_id'),
            'username'=>input('username'),
            'is_lock'=>input('is_lock'),
        ];

        //验证
        $validate = \think\Loader::validate('index/Member');

        if(!$validate->scene('edit')->check($data)){
            return $this->error($validate->getError());
        }

        //如果密码有值，则修改密码
        if($password && $password != ''){
            $data['password'] = md5($password);
        }
        $data['mobile'] = $data['username'];
        //修改数据
        $res = MemberModel::editMember($data);
        if(!$res){
            return $this->error('修改失败');
        }else{
            return $this->success('修改成功',url('index'));
        }
    }

    /**
     *
     * 删除会员
     *
     */
    public function delete(){
        $member_id = input('member_id');
        //执行删除
        $res = MemberModel::del($member_id);
        if(!$res){
            return $this->error('删除失败');
        }else{
            return $this->success('删除成功',url('index'));
        }
    }

}