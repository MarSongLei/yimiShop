<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"G:\bai\tp5\public/../application/index\view\cart\checkout.html";i:1501834798;s:62:"G:\bai\tp5\public/../application/index\view\common\header.html";i:1501912732;s:62:"G:\bai\tp5\public/../application/index\view\common\footer.html";i:1501833286;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车_一米市集</title>
    <script src="__STATIC__/index/js/jquery.min.js"></script>
    <script src="__STATIC__/index/js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/css/cart.css">
    <link rel="icon" href="__STATIC__/index/img/favicon.ico" type="image/x-ico"/>
</head>
<body>
<!--顶部-->
<div class="top"></div>
<!--主要内容-->
<div class="container">
    <!--头部-->
    <header id="header" class="head">
  <a href="<?php echo url('Index/index'); ?>">
    <div class="icon fl"></div>
  </a>
  <div class="headRight fl">
    <ul class="fl">
      <li class="fl ct showBorderL">
        <span class="spanH ">所有商品</span>
        <!--隐藏模块1-->
        <div class="d1">
          <?php foreach($topCate as $val): ?>
          <div class="culumn fl">
            <a href="#">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column1.jpg" alt="">
                <p><a href="<?php echo url('Goods/index',['cate_id'=>$val['cate_id']]); ?>"><?php echo $val['cate_name']; ?></a></p>
              </div>
            </a>
            <div>
              <?php foreach($firCate as $v): if($v['cate_pid'] == $val['cate_id']): ?>
              <p><a href="<?php echo url('Goods/index',['cate_id'=>$v['cate_id']]); ?>"><?php echo $v['cate_name']; ?></a></p>
              <?php endif; endforeach; ?>
              <!--<p><a href="">根茎类</a></p>
              <p><a href="">豆制品</a></p>
              <p><a href="">叶菜类</a></p>
              <p><a href="">菌菇类</a></p>
              <p><a href="">豆类</a></p>
              <p><a href="">茄果花类</a></p>
              <p><a href="">葱姜蒜和香料</a></p>
              <p><a href="">冷藏冷冻菜蔬</a></p>
              <p><a href="">蔬菜花卉盆栽</a></p>-->
            </div>
          </div>
          <?php endforeach; ?>
         <!-- <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>
          <div class="culumn fl">
            <a href="">
              <div class="hDiv borderD">
                <img src="__STATIC__/index/img/column2.jpg" alt="">
                <p><a href="">安全水果</a></p>
              </div>
            </a>
            <div>
              <p><a href="">热带水果</a></p>
              <p><a href="">苹果和梨</a></p>
              <p><a href="">西瓜</a></p>
              <p><a href="">葡萄和浆果类</a></p>
              <p><a href="">瓜类</a></p>
            </div>
          </div>-->
        </div>
      </li>
      <li class="fl ct borderL">
        <span class="spanH">好事发生</span>
        <!--隐藏模块2-->
        <div class="d2">
          <button>新到尖货</button>
          <hr>
          <button>充值卡</button>
          <hr>
          <button>优惠推选</button>
          <hr>
          <button>好物预购</button>
        </div>
      </li>
      <li class="fl ct borderL">
        <span class="spanH">吃的主张</span>
        <!--隐藏模块3-->
        <div class="d3">
          <button>做个选择</button>
          <hr>
          <button>农友伙伴</button>
          <hr>
          <button>认识我们</button>
          <hr>
          <button>食物记事</button>
          <hr>
          <button>公益伙伴</button>
        </div>
      </li>
    </ul>
    <!--搜索框-->
    <div class="fl borderD">
      <div class="search fl">
        <input id="searchInput" type="text" class="fl" placeholder="搜索你喜欢的" value="8424">
        <button id="searchBtn"></button>
      </div>
    </div>
    <div class="fl">
      <!--购物车-->
      <div class="cart fl">
        <div class="cartA"><span id="cartNum">0</span></div>
        <div class="cartDiv">
          <div class="sanjiaoxing"></div>
          <div class="cartData">
            <p>购物篮中空空的喔,慢慢逛，不要忘记带上「食欲」</p>
          </div>
        </div>
      </div>
      <!--用户登录-->
      <div class="user fl">
        <?php if(\think\Request::instance()->session('index.username')): ?>
        <div class="userA "></div>

        <div class="useDiv">
          <div class="sanjiaoxing"></div>
          <a href="#">
            <button><?php echo \think\Request::instance()->session('index.username'); ?></button>
          </a>
          <hr>
          <a href="<?php echo url('Login/logout'); ?>">
            <button>退出登录</button>
          </a>
        </div>
        <?php else: ?>
        <div class="userA "></div>

        <div class="useDiv">
          <div class="sanjiaoxing"></div>
          <a href="<?php echo url('Login/login'); ?>">
            <button>登录</button>
          </a>
          <hr>
          <a href="<?php echo url('Login/register'); ?>">
            <button>注册</button>
          </a>
        </div>
      <?php endif; ?>
      </div>

    </div>
  </div>
</header>
    <!--主模块-->
    <div class="section cart-has">
        <div class="head">
            <div class="cart-icon">
                <h1>
                    <img src="__STATIC__/index/img/ym_icon_cart.png" alt="">
                    结账
                </h1>
            </div>
            <div class="liucheng fr">
                <div class="cartBtn fl ok">
                    <a href="">1 购物篮</a>
                </div>
                <div class="icon_setp_arrow fl"></div>
                <div class="checkoutBtn fl active">
                    <a href="">2 结账</a>
                </div>
                <div class="icon_setp_arrow fl"></div>
                <div class="cashierBtn fl">
                    <a href="">3 收银台</a>
                </div>
            </div>
        </div>
        <div class="data">
            <!--收货地址-->
            <div class="model">
                <p class="hP">收货信息</p>
                <div class="checkbox">
                    <div class="btnD"></div>
                    <p class="cbxP">请选择收货地址</p>
                    <ul>
                        <li class="addLocalBtn">+添加新地址</li>
                    </ul>
                </div>
            </div>
            <!--添加地址表单-->
            <div class="addLocal">
                <form action="javascript:;">
                    <p>
                        <input type="text" name="name" placeholder="收货人" class="name">
                        <input type="text" name="phone" placeholder="手机/电话" class="phone">
                    </p>
                    <p>
                        <select name="province" id="province" disabled class="sec secDis">
                            <option value="上海" selected>上海</option>
                        </select>
                        <select name="city" id="city" disabled class="sec secDis">
                            <option value="上海市" selected>上海市</option>
                        </select>
                        <select name="zone" id="zone" class="sec">
                            <option value="请选择">请选择</option>
                            <option value="黄浦区">黄浦区</option>
                        </select>
                        <input type="text" name="local" placeholder="收货地址" class="local">
                    </p>
                    <p>
                        <button>保存地址</button>
                    </p>
                </form>
            </div>
            <!--收货时间-->
            <div class="model">
                <p class="hP">收货时间</p>
                <div class="date fl">
                    <div class="checkbox">
                        <div class="btnD"></div>
                        <p class="cbxP">2017-07-23</p>
                        <ul>
                            <li class="">2017-07-23</li>
                            <li class="">2017-07-24</li>
                        </ul>
                    </div>
                </div>
                <div class="time fr">
                    <div class="checkbox">
                        <div class="btnD"></div>
                        <p class="cbxP">请选择</p>
                        <ul>
                            <li class="">请选择</li>
                            <li class="">14：00-21:00</li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--优惠券-->
            <div class="fc">
                <p class="hP">优惠券</p>
                <div class="checkbox youhuiquan">
                    <div class="btnDiv"></div>
                    <p class="dataP">新增优惠券</p>
                    <div class="youhuiquanDiv">
                        <hr>
                        <input type="text" placeholder="输入优惠券码">
                        <button>使用优惠券</button>
                    </div>
                </div>
            </div>
            <!--积分抵扣-->
            <div class="fc">
                <p class="hP">积分抵扣</p>
                <div class="borderAll jf">
                    <p>
                        <input type="radio" name="jifen" class="radio" disabled> <span class="hSpan">积分抵扣</span>
                        <span class="pointText">使用 <input type="text" name="jifenNum" class="textInp" value="0"
                                                          readonly> 积分，抵扣 <span>0.00</span> 元（所有积分 <span>0</span>) </span>
                    </p>
                </div>
            </div>
            <!--余额抵扣-->
            <div class="fc">
                <p class="hP">余额抵扣</p>
                <div class="borderAll jf">
                    <p>
                        <input type="radio" name="yue" class="radio" disabled> <span class="hSpan">积分抵扣</span>
                        <span class="pointText">使用 <input type="text" name="jifenNum" class="textInp" value="0"
                                                          readonly> 元，（所有余额 ￥ <span>0.00</span>)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用账户余额支付的部分金额将不开发票</span>
                    </p>
                </div>
            </div>
            <!--付款-->
            <div class="fc">
                <p class="hP">付款</p>
                <div class="borderAll fk fl">
                    <label>
                        <input type="radio" name="fukuan" class="radio" checked>
                        <span class="hSpan"><img src="__STATIC__/index/img/pic_onlinePayment.png" alt=""></span>
                    </label>
                </div>
                <div class="borderAll fk fl">
                    <label>

                        <input type="radio" name="fukuan" class="radio">
                        <span class="hSpan"><img src="__STATIC__/index/img/pic_cashOnDelivery.png" alt=""></span>
                    </label>

                </div>
            </div>
            <!--商品清单-->
            <div class="fc">
                <p class="hP">商品清单</p>
                <div class="checkbox qingdan borderD fl">
                    <div class="btnDiv"></div>
                    <p class="dataP"><img src="__STATIC__/index/img/cartImg1.jpg" alt=""> <span class="fr" style="margin-right: 30px">共 <span
                            class="spNum">1</span> 件商品</span></p>
                    <div class="qingdanDiv fl">
                        <div class="left fl">
                            <table>
                                <tr class="hTr">
                                    <td class="hTd hTd1">商品</td>
                                    <td class="hTd hTd2">数量</td>
                                    <td class="hTd hTd2">销售单价</td>
                                    <td class="hTd hTd2">总额</td>
                                </tr>
                                <tr class="hrTr">
                                    <td colspan="4" class="hrTd">
                                        <hr>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="hTd1">
                                        <a href="">
                                            <img src="__STATIC__/index/img/cartImg1.jpg" alt=""><span>零农残特级百香果6只</span>
                                        </a>
                                    </td>
                                    <td class="hTd2"><span>1</span></td>
                                    <td class="hTd2">￥ <span>16.00</span></td>
                                    <td class="hTd2">￥ <span>16.00</span></td>
                                </tr>

                            </table>
                        </div>
                        <div class="right fl">
                            <p>使用中的优惠</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--发票-->
            <div class="fl fapiao model">
                <p class="hP">发票</p>
                <div class="checkbox">
                    <div class="btnD"></div>
                    <p class="cbxP">不开发票</p>
                    <ul>
                        <li class="bukaiBtn">不开发票</li>
                        <li class="gerenBtn">个人发票</li>
                        <li class="gongsiBtn">公司发票</li>
                    </ul>
                </div>
                <div class="geren">
                    <p>
                        <input type="text" name="fapiaotaitou" placeholder="发票抬头">
                        <button>确定</button>
                    </p>
                    <p><span>*选择个人发票，不再开具单位抬头发票</span></p>
                </div>
                <div class="gongsi">
                    <p>
                        <input type="text" name="fapiaotaitou" placeholder="发票抬头">
                        <input type="text" name="suihao" placeholder="税号">
                        <button>确定</button>
                    </p>
                </div>
            </div>
            <!--留言-->
            <div class="liuyan fl">
                <p class="hP">留言</p>
                <div class="liuyanData">
                    <textarea name="liuyan" cols="34" rows="2" placeholder="可在此留言给客服"></textarea>
                </div>
            </div>

            <!--商品小计-->
            <div class="xiaoji fr">
                <p class="fc"><span class="fl">商品小计</span><span class="fr">￥<span>28.00</span></span></p>
                <p class="fc"><span class="fl">优惠</span><span class="fr">-￥<span>0.00</span></span></p>
                <p class="fc"><span class="fl">运费</span><span class="fr">+￥<span>30.00</span></span></p>
                <hr class="fc">
                <p class="fc"><span class="fl">应付金额</span><span class="fr">￥<span>58.00</span></span></p>
                <p class="fc">
                    <button id="tijiaoBtn" class="fl">订单结算</button>
                </p>
                <p class="fc"><label><input type="checkbox" name="buzai">不在商品清单上打印价格。</label></p>
            </div>
            <!--保证以上浮动块能正常显示，不会重叠-->
            <div class="fc"></div>
        </div>
    </div>

</div>

<!--底部-->
<footer class="footer">
  <div class="bg">
    <div class="container">
      <div class="logo fl">
        <img src="__STATIC__/index/img/logo_v.png" alt="">
      </div>
      <div class="data fl">
        <p>我们希望从每个家庭餐桌上的最小单位一粒米开始，以线上市集的方法，让更多人结识友善耕耘的农夫，一步一步、一米一米地改善全中国的饮食生态。</p>
      </div>
      <div class="links fl">
        <p><a href="">相识一米市集</a></p>
        <p><a href="">邀约农友</a></p>
        <p><a href="">退换货办法</a></p>
        <p><a href="">常遇问题</a></p>
        <p><a href="">会员积分及感谢制度</a></p>
      </div>
      <div class="links fl">
        <p><a href="">全程冷链</a></p>
        <p><a href="">送达范围及时段</a></p>
        <p><a href="">运费提示</a></p>
      </div>
      <div class="links fl">
        <p><a href="">发票提示</a></p>
        <p><a href="">优惠券用法</a></p>
        <p><a href="">支付方式</a></p>
      </div>

      <div class="info fl">
        <p>服务热线</p>
        <p class="inf">400-655-1212</p>
        <p>周一至周日</p>
        <p class="inf">8:00-21:00</p>
        <p>微信公众号</p>
        <img src="__STATIC__/index/img/qr.png" alt="">
      </div>
    </div>
  </div>
  <p id="footP">沪ICP备15037721号 | 食品流通许可证SP3101051510004275 | 上海市长宁区天山西路789号中山国际广场B座2层 | © Copyright 2015 保留所有权利</p>
</footer>


<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>


<div class="tishi">
    <span>!</span>用户名或密码错误！
</div>

</body>

<script>
    <!--下拉菜单-->
    $('.model .btnD').attr('open1', '0').attr('tabindex', "0");

    $('.model .btnD').blur(function () {
        if ($(this).attr('open1') == '0') {
            $(this).next().next().show();
            $(this).css({"background": "url('./img/checkout_dropdown_open.png') no-repeat right 20px top 5px"});
            $(this).attr('open1', '1');

            //关闭其他
            $('.model .btnD').not(this).attr('open1') == '0';
            $('.model .btnD').not(this).css({"background": "url('./img/checkout_dropdown_closed.png') no-repeat right 20px top 5px"});
            $('.model .btnD').not(this).attr('open1', '0');
            $('.model .btnD').not(this).next().next().hide();
        } else {
            $(this).css({"background": "url('./img/checkout_dropdown_closed.png') no-repeat right 20px top 5px"});
            $(this).attr('open1', '0');
            $(this).next().next().hide();
        }
    });
    //优惠券
    $('.youhuiquan .btnDiv').attr('open1', '0').attr('tabindex', "0");
    $('.youhuiquan .btnDiv').click(function () {
        if ($(this).attr('open1') == '0') {
            $(this).next().next().show(200);
            $(this).css({"background": "url('./img/checkout_dropdown_open.png') no-repeat"});
            $(this).parent().animate({'height': '120px'}, 200);
//            $(this).parent().css({'height':'120px'});
            $(this).attr('open1', '1');
        } else {
            $(this).css({"background": "url('./img/checkout_dropdown_closed.png') no-repeat"});
//            $(this).parent().css({'height': '45px'});
            $(this).parent().animate({'height': '45px'}, 200);
            $(this).attr('open1', '0');
            $(this).next().next().hide(200);
        }
    });

    //商品清单
    $('.qingdan .btnDiv').attr('open1', '0').attr('tabindex', "0");
    $('.qingdan .btnDiv').click(function () {
        if ($(this).attr('open1') == '0') {
            $(this).next().next().show();
            $(this).next().hide();
            $(this).css({"background": "url('./img/checkout_dropdown_open.png') no-repeat"});
//            $(this).parent().animate({'height': '120px'}, 200);
            $(this).parent().css({'height': 'auto'});
            $(this).attr('open1', '1');
        } else {
            $(this).css({"background": "url('./img/checkout_dropdown_closed.png') no-repeat"});
//            $(this).parent().css({'height': '45px'});
            $(this).next().show();
            $(this).parent().animate({'height': '60px'}, 200);
            $(this).attr('open1', '0');
            $(this).next().next().hide(200);
        }
    });

    $('.youhuiquan input').keyup(function () {
        this.value = this.value.toUpperCase();
    }).focus(function () {
        $('.model .btnD').attr('open1') == '0';
        $('.model .btnD').css({"background": "url('./img/checkout_dropdown_closed.png') no-repeat right 20px top 5px"});
        $('.model .btnD').attr('open1', '0');
        $('.model .btnD').next().next().hide();
    });

    //下拉菜单
    $('*').not('.model .btnD').not('.model div').not('.model').not('.model p').not('.model ul').not('.model li').focus(function () {
        //关闭所有
        $('.model .btnD').attr('open1') == '0';
        $('.model .btnD').css({"background": "url('./img/checkout_dropdown_closed.png') no-repeat right 20px top 5px"});
        $('.model .btnD').attr('open1', '0');
        $('.model .btnD').next().next().hide();

    });

    $('.checkbox li').not('.addLocalBtn').click(function () {
        $(this).parent().prev().html($(this).html());
    });

    $('.checkbox').click(function () {
        $(this).children().eq(0).blur();
    });


    //    显示填写收货地址表单
    $('.addLocalBtn').click(function () {
        $('.addLocal').show();
        $(this).parent().hide();
    });

    $('.bukaiBtn').click(function () {
        $('.fapiao .geren').hide();
        $('.fapiao .gongsi').hide();
    });
    $('.gerenBtn').click(function () {
        $('.fapiao .geren').show();
        $('.fapiao .gongsi').hide();
    });
    $('.gongsiBtn').click(function () {
        $('.fapiao .geren').hide();
        $('.fapiao .gongsi').show();
    });


</script>

</html>