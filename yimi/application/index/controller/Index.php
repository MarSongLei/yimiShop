<?php
namespace app\index\controller;
use app\index\model\Goods;
class Index extends Base
{
    public function index()
    {
        //获得所有商品
        $data = Goods::getGoods();
        $this->assign('data',$data);
        $dataNeW=Goods::newGoods();
        $this->assign('dataNew',$dataNeW);
        $dataSafe=Goods::safeGoods();
        $this->assign('dataSafe',$dataSafe);
        $dataVeg=Goods::vegGoods();
        $this->assign('dataVeg',$dataVeg);
        $dataMeat=Goods::meatGoods();
        $this->assign('dataMeat',$dataMeat);
        $dataMice=Goods::miceGoods();
        $this->assign('dataMice',$dataMice);
        return $this->fetch();
    }

    //微信授权登录获取用户信息
    public function getUserInfo(){
        $url = $this->getCode();
        echo $url;
    }
    /**
     *
     *  1 第一步：用户同意授权，获取code
        2 第二步：通过code换取网页授权access_token
        3 第三步：刷新access_token（如果需要）
        4 第四步：拉取用户信息(需scope为 snsapi_userinfo)
        5 附：检验授权凭证（access_token）是否有效
     */

    //1 第一步：用户同意授权，获取code
    private function getCode(){
        $redirectUrl = "http://w55i6h.natappfree.cc/";
        $redirectUrl = $redirectUrl."x0315/x0315_shop/public/index.php/index/Index/redreictUrl";
        $redirectUrl = urlencode($redirectUrl);
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxeea3e8ad27b37568&redirect_uri='{$redirectUrl}'&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect ";
        return $url;
    }
    //毁掉地址
    public function redreictUrl(){

    }

    //接入微信接口验证的方法
    public function checkAuth(){

    }
}
