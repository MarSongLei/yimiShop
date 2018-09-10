<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"G:\yimi\tp5\public/../application/index\view\item\index.html";i:1506662840;s:63:"G:\yimi\tp5\public/../application/index\view\common\header.html";i:1501912732;}*/ ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>有机巨玫瑰葡萄_一米市集</title>
    <script src="__STATIC__/index/js/jquery.min.js"></script>
    <script src="__STATIC__/index/js/index.js"></script>
    <script src="__STATIC__/index/js/concent.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/index.css">
    <link rel="icon" href="__STATIC__/index/img/favicon.ico" type="image/x-ico"/>
    <link rel="stylesheet" href="__STATIC__/index/css/product.css">
    <link rel="stylesheet" href="__STATIC__/index/css/concent.css">
    <link rel="stylesheet" href="__STATIC__/index/css/common.css">
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
    <div class="content_main">
        <div class="m_top">
            <div class="main_box z">
                <!--选项-->
                <div class="m_check z">
                    <div class="check check1"><a href="#"><img src="<?php echo $arr2[0]; ?>" alt=""></a></div>
                    <div class="check"><a href="#"><img src="<?php echo $arr2[1]; ?>" alt=""></a></div>
                    <div class="check"><a href="#"><img src="<?php echo $arr2[2]; ?>" alt=""></a></div>
                    <div class="check"><a href="#"><img src="<?php echo $arr2[3]; ?>" alt=""></a></div>
                </div>
                <!--轮播内容-->
                <div class="main_wra z">
                    <div class="main_im"><img src="<?php echo $arr[0]; ?>" alt=""></div>
                    <div class="main_im"><img src="<?php echo $arr[1]; ?>" alt=""></div>
                    <div class="main_im"><img src="<?php echo $arr[2]; ?>" alt=""></div>
                    <div class="main_im"><img src="<?php echo $arr[3]; ?>" alt=""></div>
                </div>
            </div>
            <div class="m_top_r z">
                <div class="m_r_top">
                    <div class="le z">
                        <p class="p1">Maruzen</p>
                        <p class="p2"><?php echo $goodsData['goods_name']; ?></p>
                    </div>
                    <div class="ri y">
                        <div class="hua">4.9</div>
                        <p class="p3"><a href="">46</a>个人评论</p>
                    </div>
                    <div class="clear"></div>
                    <div class="tex">
                        <?php echo $goodsData['desc']; ?>
                    </div>
                    <div class="m_foot">
                        ￥<?php echo $goodsData['sell_price']; ?>
                    </div>
                </div>
                <div class="m_down">
                    <div class="d_list">
                        <div class="list_t z">规格</div>
                        <div class="list_t z">保存方式</div>
                        <div class="list_t z">保质期</div>
                        <div class="clear"></div>
                        <div class="list_d z">330g/份</div>
                        <div class="list_d z">0-4℃冷藏</div>
                        <div class="list_d list_d1 y">1年</div>
                    </div>
                    <div class="t4 z" style="margin-right: 0">
                            <a class="ym_cart_decrease" style="height: 40px"><span class="a_sp minus">-</span></a>
                            <input type="text" value="1" style="width: 50px;height: 40px" class="inpt"
                                   goods_id="<?php echo $goodsData['goods_id']; ?>" store="<?php echo $goodsData['store']; ?>" id="num">
                            <a class="ym_cart_increase" style="height: 40px"><span class="a_sp add">+</span></a>
                        </div>
                        <div class="tf_ri_btn y">
                            <button id="jiaru" class="fr"><i class="s1 z"></i>加入购物车</button>
                        </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="main">
        <div class="mainData fr divModel">
            <div class="left fl">
                <?php echo $goodsData['content']; ?>
            </div>
            <div class="right fr">
                <div class="d1 fl">
                    <h5>农友伙伴</h5>
                    <div class="data">
                        <h4>心心</h4>
                        <p>
                            「心心」牌有机葡萄是上海光明集团旗下的有机葡萄品牌。光明集团五四有限公司是我国南方地区第一家经南京国环有机产品认证中心（OFDC）认证的有机栽培示范基地，集果品研究、生产、示范、休闲、观光为一体的综合型园区，先后被评为上海市优质果品特供基地、上海市安全优质信得过果园。在所有「心心」牌有机葡萄包装上都贴有有机防伪码可以查询是否有机正品，同时市民可以通过手机客户端扫描溯源二维码，了解有机葡萄的整个生产过程。</p>
                        <p>
                            <button class="goNongchang">去农场</button>
                        </p>
                    </div>
                </div>
                <div class="d1 fl">
                    <h5>心心的相关产品</h5>
                    <div class="data">
                        <div class="modelI fl">
                            <dl>
                                <dd>
                                    <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                                    <div class="youhuiDiv">
                                        <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                                    </div>
                                    <div class="numDiv">
                                        <span>0</span>
                                        <button class="reduceBtn">-</button>
                                        <button class="addBtn">+</button>
                                    </div>
                                </dd>
                                <dt>
                                <h4><a href="">生态种植板栗南瓜</a></h4>
                                <p>
                                    <button>君禾园</button>
                                    <span class="likeP">1250</span>g/份
                                </p>
                                <p class="money">￥<span class="money">25.00</span></p>
                                </dt>
                            </dl>
                        </div><!--1-->
                        <div class="modelI fl">
                            <dl>
                                <dd>
                                    <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                                    <div class="youhuiDiv">
                                        <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                                    </div>
                                    <div class="numDiv">
                                        <span>0</span>
                                        <button class="reduceBtn">-</button>
                                        <button class="addBtn">+</button>
                                    </div>
                                </dd>
                                <dt>
                                <h4><a href="">生态种植板栗南瓜</a></h4>
                                <p>
                                    <button>君禾园</button>
                                    <span class="likeP">1250</span>g/份
                                </p>
                                <p class="money">￥<span class="money">25.00</span></p>
                                </dt>
                            </dl>
                        </div><!--1-->
                    </div>
                </div>
                <div class="d1 fl">
                    <h5>相关文章</h5>
                    <div class="data">
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!--底部-->
<footer class="footer fc">
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
</body>
<script>
    //商品图标选择
    $('.sp').eq(0).css({'opacity': '1'});
    $('.sp_current_img').children().eq(0).attr('src', '__STATIC__/index/img/pro_s1.jpg');
    $('.sp').mousemove(function () {
        srcIndex = $(this).index('.sp') + 1;
        $(this).css({'opacity': '1'});
        $('.sp').not($(this)).css({'opacity': '0.4'});
        $('.sp_current_img').children().eq(0).attr('src', '__STATIC__/index/img/pro_s' + srcIndex + '.jpg');
    });
    //显示隐藏分享选择
    $('.jq1').mousemove(function () {
        $(this).children().eq(0).children().eq(0).show();
    }).mouseleave(function () {
        $(this).children().eq(0).children().eq(0).hide();
    });

    //    优惠信息
    $('.spJianjia').hover(function () {
        $('.showJianjiaData').toggle();
        $(this).children().eq(0).toggle();
    });
</script>
<script>
   $(function () {
       $("#jiaru").click(function () {
           var goods_id=$('#num').attr('goods_id');
           var goods_num=$('#num').val();
//           验证
           $.ajax({
               type:"POST",
               dataType:"json",
               data:{goods_id:goods_id,goods_num:goods_num},
               url:"<?php echo url('Cart/add'); ?>",
               success:function (d) {
                   if(d.status == 'success'){
                       alert(d.msg);
                       location.href= "<?php echo url('Cart/index'); ?>";
                   }
               }
           })
       })
   })
</script>
<script>
    $('.inpt').blur(function () {
        var $v = $(this).val();
        if ($v < 1) {
            $(this).val(1);
            alert('商品数量不能为负数')
        }
    })
    $(".minus").click(function () {
        var num = $(".inpt").val();
        num--;
        if (num <= 1) {
            num = 1;
        }
        $(".inpt").val(num);
    })
    $(".add").click(function () {
        var num = $(".inpt").val();
        num++;
        var store = $('.inpt').attr('store');
//        alert(store);
        if (num >= store) {
            num = 1;
        }
        $(".inpt").val(num);
    })
</script>
</html>