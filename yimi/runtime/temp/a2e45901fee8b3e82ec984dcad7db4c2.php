<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"G:\yimi\tp5\public/../application/index\view\login\login.html";i:1501899882;s:63:"G:\yimi\tp5\public/../application/index\view\common\header.html";i:1501912732;s:63:"G:\yimi\tp5\public/../application/index\view\common\footer.html";i:1501833286;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录_一米市集</title>
    <script src="__STATIC__/index/js/jquery.min.js"></script>
    <script src="__STATIC__/index/js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/css/login.css">
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
    <div class="section">
        <div class="left fl">
            <h1 class="borderD">登录</h1>
            <!--登录表单-->
            <form action="<?php echo url('Login/login'); ?>" method="post">
                <p>登录账号</p>
                <p><input type="text" placeholder="用户名/邮箱地址/手机号" name="username"></p>
                <p>密码</p>
                <p><input type="password" placeholder="填写密码" name="password"></p>


                <p>校验码</p>
                <input type="text" placeholder="填写验证码" name="yanzhengma" id="shortIn">
                <img src="" alt="" width="65px" height="20px">
                <a href="" style="font-size: 0.8em">看不清楚?换一个</a>

                <p><label><input type="checkbox" class="checkbox" checked>记住账号</label></p>
                <p><input type="submit" value="登录" class="submit"></p>
                <p><a href="">忘记密码？</a></p>


            </form>
        </div>
        <div class="right fl">
            <div class="bg"></div>
            <div class="regist">
                <p>我不是会员，<a href="<?php echo url('Login/register'); ?>">要加入</a></p>
            </div>
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

<!--<script>
    //登录验证
    $('form').submit(function () {
        $name = $('input[name=name]').val();
        $pw = $('input[name=password]').val();

        if ($name == '') {
            $('input[name=name]').css({'background':'#FFF8F6'}).focus();
        } else if ($pw == '') {
            $('input[name=password]').css({'background':'#FFF8F6'}).focus();

            $('input[name=name]').css({'background':'#FFF'});
        } else {
            $('input[name=name]').css({'background':'#FFF'});
            $('input[name=password]').css({'background':'#FFF'});


            if ($name == 'lin') {
                if ($pw == 'lin') {
                    alert('success');
                    $('form').attr({'action': 'a.php'});
                }
            } else {
                $('.tishi').show();
                setTimeout(function () {
                    $('.tishi').hide();
                }, 2000);
            }
        }
    });

</script>-->
</html>