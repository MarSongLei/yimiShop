<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 10:11
 */

namespace app\admin\model;

use think\Model;
use think\Paginator;

class Cate extends Model {

    /**
     *
     * 查询所有分类--有分页
     *
     */

    static public function getCateData() {
        //返回对象--结果集
        $data = db('cate')->order('cate_path')->paginate(20);
        //返回分页
        $page = $data->render();

        $data = $data->all();
        foreach ($data as $key => $val) {
            $data[$key]['cate_name'] = str_repeat('>>', $val['cate_level']) . $val['cate_name'];
        }

        $arr['data'] = $data;
        $arr['page'] = $page;

        return $arr;
    }

    /**
     *
     * 查询所有分类  -- 没有分页
     *
     */

    static public function newCateData() {
        $data = db('cate')->select();
        foreach ($data as $key => $val) {
            $data[$key]['cate_name'] = str_repeat('>>', $val['cate_level']) . $val['cate_name'];
        }

        //处理是不是最低级分类
        foreach ($data as $key=>$val){
            foreach ($data as $k=>$v){
                if($v['cate_pid'] == $val['cate_id']){
                    //有子类
                    $data[$key]['has_cate'] = 'no';
                    break;
                }else{
                    //没有子类
                    $data[$key]['has_cate'] = 'yes';
                }
            }
        }
        //dump($data);exit;
        return $data;
    }

    /**
     *
     * 添加顶级分类
     */

    static public function addTopCate($data) {
        $data['cate_pid'] = 0;
        //$data['cate_path'] =
        $data['cate_level'] = 0;
        //返回主键值
        $cate_id  = db('cate')->insertGetId($data);
        $saveData = [
            'cate_id'   => $cate_id,
            'cate_path' => $cate_id,
        ];
        $r        = db('cate')->update($saveData);

        return $r;
    }


    /**
     *
     * 添加子分类
     */

    static public function addCate($data) {
        $arr = [
            'cate_name'  => $data['cate_name'],
            'cate_pid'   => $data['cate_pid'],
            'cate_level' => $data['cate_level']
        ];
        //添加数据
        $cate_id = db('cate')->insertGetId($arr);
        //父类path拼上自己的id
        $cate_path = $data['path'] . ',' . $cate_id;
        $saveData  = [
            'cate_id'   => $cate_id,
            'cate_path' => $cate_path,
        ];
        $res       = db('cate')->update($saveData);

        return $res;
    }

    /**
     *
     * 通过cate_id 查询数据
     */

    static public function getCateById($cate_id) {
        if (!$cate_id) {
            return false;
        }
        //查询数据
        $data = db('cate')->find($cate_id);

        return $data;
    }

    /**
     *
     * 修改分类名称
     */

    static public function updateCate($data) {
        $result = db('cate')->update($data);

        return $result === false ? false : true;
    }

    /**
     *
     * 删除子分类
     */

    static public function del($cate_id) {
        $response = [
            'status' => 'error',
            'msg'    => ''
        ];
        if (!$cate_id) {
            $response['msg'] = '参数错误';

            return $response;
        }
        //判断该分类下有没有子类    子类的pid是父类的id
        $where = [
            'cate_pid' => $cate_id
        ];
        $arr   = db('cate')->where($where)->select();
        //如果不为空，说明该类别下有子类，不能删除
        if (!empty($arr)) {
            $response['msg'] = '该类别下有子类，不能删除';

            return $response;
        }

        //执行删除
        $res = db('cate')->delete($cate_id);
        if (!$res) {
            $response['msg'] = '删除失败';

            return $response;
        }

        $response['status'] = 'success';
        $response['msg']    = '删除成功';

        return $response;

    }

    /**
     *
     * 添加分类  集成顶级分类和子分类
     */

    static public function addAllCate($data) {
        if ($data['cate_id'] == 0) {
            //顶级分类
            $cate_pid   = 0;
            $cate_level = 0;
        } else {
            //子分类
            $cate_pid = $data['cate_id'];//子类的pid就是父类的id
            //查询父类的数据
            $father     = db('cate')->find($data['cate_id']);
            $cate_level = $father['cate_level'] + 1;//子类的level就是父类的level + 1
        }
        $arr = [
            'cate_name'  => $data['cate_name'],
            'cate_pid'   => $cate_pid,
            'cate_level' => $cate_level,
        ];
        //返回主键
        $pk = db('cate')->insertGetId($arr);
        //得到自己的path  如果是顶级分类，path就是自己的id   子类的path就是 父类的path拼上子类自己的id
        $saveData = [
            'cate_id' => $pk,
        ];
        if ($data['cate_id'] == 0) {
            $saveData['cate_path'] = $pk;
        } else {
            $saveData['cate_path'] = $father['cate_path'] . ',' . $pk;
        }

        //修改path
        $res = db('cate')->update($saveData);

        return $res ?? false;
    }
}