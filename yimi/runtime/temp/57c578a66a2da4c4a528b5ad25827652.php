<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"G:\bai\tp5\public/../application/index\view\cart\index.html";i:1506675254;s:62:"G:\bai\tp5\public/../application/index\view\common\header.html";i:1501912732;s:62:"G:\bai\tp5\public/../application/index\view\common\footer.html";i:1501833286;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车_一米市集</title>
    <script src="__STATIC__/index/js/jquery-3.2.1.min.js"></script>
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
    <!--购物车为空时-->
    <?php if(count($data) == 0): ?>
    <div class="cart-section section cart-null">
        <div class="head">
            <div class="cart-icon">
                <h1>
                    <img src="__STATIC__/index/img/ym_icon_cart.png" alt="">
                    购物车
                </h1>
            </div>
        </div>
        <div class="data">
            <div class="mess">
                <img src="__STATIC__/index/img/ym_icon_cart.png" alt="">
                <p>购物篮中空空的喔,慢慢逛，不要忘记带上「食欲」</p>
            </div>
        </div>
    </div>
    <?php else: ?>
    <!--购物车非空时-->
    <div class="cart-section section cart-has">
        <div class="head">
            <div class="cart-icon">
                <h1>
                    <img src="__STATIC__/index/img/ym_icon_cart.png" alt="">
                    购物车
                </h1>
            </div>
            <div class="liucheng fr">
                <div class="cartBtn fl active">
                    <a href="">1 购物篮</a>
                </div>
                <div class="icon_setp_arrow fl"></div>
                <div class="checkoutBtn fl">
                    <a href="">2 结账</a>
                </div>
                <div class="icon_setp_arrow fl"></div>
                <div class="cashierBtn fl">
                    <a href="">3 收银台</a>
                </div>
            </div>
        </div>
        <div class="data">
            <table>
                <tr class="tr1">
                    <td class="cb">
                        <input type="checkbox" name="" class="chk chk_all">
                    </td>
                    <td class="sp">商品</td>
                    <td class="sj">售价</td>
                    <td class="sl">数量</td>
                    <td class="xj">小计</td>
                    <td class="cz">操作</td>
                </tr>
                <?php foreach($data['data'] as $v): ?>

                <tr>
                    <td class="cb">
                        <input type="checkbox" name="" class="chk">
                    </td>
                    <td class="sp">
                        <img src="<?php echo $v['image_s_url']; ?>" alt="">
                        <span><a href=""><?php echo $v['goods_name']; ?></a></span>
                    </td>
                    <td class="sj">
                        ￥<span><?php echo $v['sell_price']; ?></span>
                    </td>
                    <td class="sl">
                        <div class="d1">
                            <span class="fl left">-</span>
                            <input type="text" class="fl inp" maxlength="2" value="<?php echo $v['goods_num']; ?>" store="<?php echo $v['store']; ?>" goods_id="<?php echo $v['goods_id']; ?>">
                            <span class="fl right">+</span>
                        </div>
                    </td>
                    <td class="xj">
                        ￥<span><?php echo $v['sell_price']*$v['goods_num']; ?></span>
                    </td>
                    <td class="cz">
                        <span>&times;</span>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr class="end">
                    <td colspan="2">
                        <button>清空购物车</button>
                        <button>删除勾选</button>
                    </td>
                    <td colspan="4">
                        <div class="allDiv fl">
                            <p class="p1">订单金额</p>
                            <p class="p2">￥<span class="allMoney"><?php echo $data['total']; ?></span></p>
                            <p class="p3">不含运费</p>
                        </div>
                        <button id="jiesuan" class="fl">提交订单</button>
                    </td>
                </tr>
            </table>
            <div class="bottomDiv">
                <div class="mingxi fr">
                    <h2>金额明细</h2>
                    <ul>
                        <li class="li1"><span class="left">商品小计</span><span class="right">￥<span class="allMoney"><?php echo $data['total']; ?></span></span></li>
                        <li class="li2"><hr></li>
                        <li class="li3"><span class="left ">购买金额</span><span class="right">￥<span class="allMoney"><?php echo $data['total']; ?></span></span></li>
                        <li><span class="left">可得积分</span><span class="right"><span class="allMoney">169</span>点</span></li>
                    </ul>
                    <button class="btn1">查看优惠详情</button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
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
<!--提交订单-->
    <script>
        $(function () {
            $("#jiesuan").click(function () {
                //判断是否有提交
                location.href = "<?php echo url('Cart/checkout'); ?>";
                return;
            });
            $('.left').click(function () {
                var num=$(this).siblings('.inp').val();
                var goods_id=$(this).siblings('.inp').attr('goods_id');
                num--;
                if(num<=1){
                    num=1;
                }
                $(this).siblings('.inp').val(num);
                $.ajax({
                    type:'post',
                    dataType:'json',
                    data:{goods_id:goods_id,goods_num:num},
                    url:"<?php echo url('Cart/minus'); ?>",
                    success:function () {
                        if(d.status == 'success'){
//                            alert(d.msg);
                            location.href= "<?php echo url('Cart/index'); ?>";
                        }
                    }
                })





            })
            $('.right').click(function () {
                var goods_id=$(this).siblings('.inp').attr('goods_id');
                var num=$(this).siblings('.inp').val();
                num++;
                var store=$(this).siblings('.inp').attr('store');
                if(num>=store){
                    num=store
                }
                $(this).siblings('.inp').val(num);
                $.ajax({
                    type:'post',
                    dataType:'json',
                    data:{goods_id:goods_id,goods_num:num},
                    url:"<?php echo url('Cart/minus'); ?>",
                    success:function (d) {
                        if(d.status == 'success'){
//                            alert(d.msg);
                            location.href= "<?php echo url('Cart/index'); ?>";
                        }
                    }
                })




            })
            $('.inp').blur(function () {
                var $v = $(this).val();
                if ($v < 1) {
                    $(this).val(1);
                    alert('商品数量不能为负数')
                }
                if ($v>store) {
                    var store=$(this).siblings('.inp').val('store');
                    $(this).val(1);
                    alert('库存没那么多')
                }
            })
        })
    </script>

</body>
</html>