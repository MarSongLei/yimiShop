<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"G:\bai\tp5\public/../application/index\view\login\regist.html";i:1504590028;s:62:"G:\bai\tp5\public/../application/index\view\common\header.html";i:1501912732;s:62:"G:\bai\tp5\public/../application/index\view\common\footer.html";i:1501833286;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册_一米市集</title>
    <script src="__STATIC__/index/js/jquery.min.js"></script>
    <script src="__STATIC__/index/js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/css/regist.css">
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
            <h1>会员注册</h1>
            <!--注册表单-->
           <!-- <form action="javascript:;" method="post">-->
            <form action="<?php echo url('Login/register'); ?>" method="post">
                <p>
                    <span>手机号</span>
                    <input type="text" placeholder="请填写正确手机号" name="phone" maxlength="11">
                    <br>
                    <lebel class="s2"><span class="s1">!</span>请填写正确的手机号</lebel>
                </p>
                <p>
                    <span>密码</span>
                    <input type="password" placeholder="6-20个字符" name="password" minlength="6" maxlength="20">
                    <br>
                    <lebel class="s2"><span class="s1">!</span>密码长度为6-20字符</lebel>
                </p>
                <p>
                    <span></span>
                    <span class="mimaqiangdu">密码强度：<span class="mimaqiangduVal"> </span>
                        <span class="mimaqiangduImg1"></span>
                        <span id="mimaqiangduImg"></span>
                    </span>
                </p>
                <p>
                    <span>确认密码</span>
                    <input type="password" placeholder="请再次填写密码" name="repassword">
                    <br>
                    <lebel class="s2"><span class="s1">!</span>密码与确认密码不相符，请重新填写</lebel>
                </p>
                <p>
                    <span>验证码</span>
                    <input type="text" placeholder="请填写校验码" name="jiaoyanma" class="shortIn">
                    <img src="" alt="" width="65px" height="20px">
                    <a href="">看不清楚?换一个</a>
                    <lebel class="s2"><span class="s1">!</span>请输入校验码</lebel>
                </p>
                <p>
                    <span>验证码</span>
                    <input type="text" placeholder="请填写验证码" name="yanzhengma" class="shortIn">
                    <a style="cursor: pointer;" id="getCode">获取短信验证码</a>
                    <br>
                    <lebel class="s2"><span class="s1">!</span>本项必填</lebel>

                </p>
                <p class="tishi">
                    <span> </span>
                    如未收到短信，请联络客服或拨打400-655-1212</p>
                <p>
                    <label>
                        <input type="checkbox" class="checkbox">
                        我已阅读并同意 <a href="">会员注册协议</a> 和 <a href="">隐私保护政策</a>
                    </label>
                </p>
                <p>
                    <input type="submit" value="注册" class="submit">
                </p>
            </form>
        </div>
        <div class="right fl">
            <div class="bg"></div>
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

</body>
    <script>
        $(function () {
            $('#getCode').on('click',function () {
                var mobile =   $('input[name=phone]').val();
                $.ajax({
                    url:"<?php echo url('Login/getSmsCode'); ?>",
                    type:"POST",
                    dataType:"JSON",
                    data:{mobile:mobile},
                    success:function (d) {

                    }
                })
            })
        })
    </script>
<!--<script>
    //注册表单验证
//    手机号验证
    $('input[name=phone]').blur(function () {
        var $phone = this.value;
        if ((!(/^1[3|4|5|8][0-9]\d{4,8}$/.test($phone)))) {
            $(this).next().next().show();
        }else{
            $(this).next().next().hide();
        }
    });
//    密码验证,强度
    $('input[name=password]').keyup(function() {
        var $pw = this.value;
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (false == enoughRegex.test($pw)) {
            $('.mimaqiangduVal').html('差');
            $('#mimaqiangduImg').css({'width':'0px'});
        } else if (strongRegex.test($pw)) {
            $('.mimaqiangduVal').html('强').css({'color':'#8CB69E'});
            $('#mimaqiangduImg').css({'width':'111px','background':'#8CB69E'});
        } else if (mediumRegex.test($pw)) {
            $('.mimaqiangduVal').html('中').css({'color':'#DACA86'});
            $('#mimaqiangduImg').css({'width':'74px','background':'#DACA86'});
        } else {
            $('.mimaqiangduVal').html('弱').css({'color':'#E88771'});
            $('#mimaqiangduImg').css({'width':'37px','background':'#E88771'});
        }
    }).blur(function () {
        var $pw = this.value;
        if($pw.length < 6 || $pw.length > 20){
            $(this).next().next().show();
        }else {
            $(this).next().next().hide();
        }
    });
//    确认密码
    $('input[name=repassword]').blur(function () {
        var $pw = $('input[name=password]').val();
        var $repw = this.value;
        if($repw != $pw){
            $(this).next().next().show();
        }else {
            $(this).next().next().hide();
        }
    });
//    校验码
    $('input[name=jiaoyanma]').blur(function () {
        var $jiaoyanma = this.value;
        if($jiaoyanma.length < 4){
            $(this).next().next().next().show();
        }else {
            $(this).next().next().next().hide();
        }
    });
//    提交判断，验证码
    $('form').submit(function () {
        $('input[name]').blur();//触发其他判断
        $yanzhengma  = $('input[name=yanzhengma]').val();
        if($yanzhengma.length < 4){
            $('input[name=yanzhengma]').next().next().next().show();
        }else {
            $('input[name=yanzhengma]').next().next().next().hdie();
        }

        if(!$('.s2').is(':visible')){
            $('form').attr({'action':'a.php'});
        }
    });

</script>-->
</html>