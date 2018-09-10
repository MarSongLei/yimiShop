<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"G:\bai\tp5\public/../application/index\view\goods\index.html";i:1501833808;s:62:"G:\bai\tp5\public/../application/index\view\common\header.html";i:1501912732;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品分类_四时菜蔬_一米市集</title>
    <script src="__STATIC__/index/js/jquery.min.js"></script>
    <script src="__STATIC__/index/js/index.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/index.css">
    <link rel="stylesheet" href="__STATIC__/index/css/products.css">
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
    <div class="main">
        <div class="head">
            <div class="left fl">
                <img src="__STATIC__/index/img/pro_1.jpg" alt="">
            </div>
            <div class="center fl">
                <div class="window">
                    <div class="pic">
                        <a href="#"><img src="__STATIC__/index/img/pro_w_1.jpg" alt="" class="active"></a>
                        <a href="#"> <img src="__STATIC__/index/img/pro_w_2.jpg" alt=""></a>
                        <a href="#"><img src="__STATIC__/index/img/pro_w_3.jpg" alt=""></a>
                        <a href="#"><img src="__STATIC__/index/img/pro_w_4.jpg" alt=""></a>
                        <a href="#"> <img src="__STATIC__/index/img/pro_w_5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="bottom">
                    <ol>
                        <li><a href="#" class="active">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                    </ol>
                </div>

            </div>
            <div class="right fr">
                <div class="d1">
                    <a href="#"><img src="__STATIC__/index/img/pro_r1.jpg" alt=""></a>
                </div>
                <div class="d2">
                    <a href="#"><img src="__STATIC__/index/img/pro_r2.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="body divModel">
            <div class="left fl">
                <div class="list">
                    <div class="opBtn fl"></div>
                    <div class="fr opData">
                        <div class="title">
                            <h4>分类</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <li><a href="#"><label><input type="checkbox"><span>叶菜类</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>根茎类</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>茄果瓜花类</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>豆类</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>菌菇类</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>葱姜蒜和香料</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>豆制品</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>冷藏冷冻菜蔬</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>蔬菜花卉盆栽</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>番茄</span></label></a></li>
                                <li><a href="#"><span>清除</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <div class="fr opData">
                        <div class="title">
                            <h4>价格范围</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <li>1</li>
                                <li>2</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="list">
                    <div class="opBtn fl"></div>
                    <div class="fr opData">
                        <div class="title">
                            <h4>农场&品牌</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <li><a href="#"><label><input type="checkbox"><span>旭耕农场</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>玫瑰庄园</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>争荣农场</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>岑谷生态农场</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>百欧欢</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>九洲丰园</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>璟欣</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>圣纳茜斯</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>Maruzen</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>东北农嫂</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>君禾园</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>青泥巴</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>德添</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>甲石合作社</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>Mr.Moolenaar</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>豆味道</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>青宁</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>沙拉瓶子</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>紫旭谷</span></label></a></li>
                                <li><a href="#"><span>清除</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="list">
                    <div class="opBtn fl"></div>
                    <div class="fr opData">
                        <div class="title">
                            <h4>做个选择</h4>
                        </div>
                        <div class="seclectDiv">
                            <ul>
                                <li><a href="#"><label><input type="checkbox"><span>可持续发展</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>小农栽种</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>天然无毒</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>本地食材</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>一米亲访</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>古法手作</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>无负面添加</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>自然农法</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>优质产地</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>无麸质</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>纯天然原料</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>非转基因</span></label></a></li>
                                <li><a href="#"><label><input type="checkbox"><span>有机生产</span></label></a></li>
                                <li><a href="#"><span>清除</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right fr">
                <div class="head">
                    <div class="pro_count fl">
                        共 <span>97</span> 件
                    </div>
                    <div class="btn fr ">价格</div>
                    <div class="btn fr">购买</div>
                    <div class="btn fr">评价</div>
                    <div class="btn fr strongTag">综合</div>
                </div>
                <div class="body">
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
                <div class="foot fc">
                    <div class="pre fl">
                        <span class="fl">◄上一页</span>
                        <ul class="fl">
                            <li><span class="active">1</span></li>
                            <li><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                            <li><span>5</span></li>
                        </ul>
                        <span class="fl">下一页►</span>
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
    <p id="footP">沪ICP备15037721号 | 食品流通许可证SP3101051510004275 | 上海市长宁区天山西路789号中山国际广场B座2层 | ? Copyright 2015 保留所有权利</p>
</footer>

<!--回到顶部按钮-->
<div class="toTopBtn"></div>
<div class="customerBtn"></div>
</body>
<script>
    <!--轮播图-->
    index = 1;
    picWidth = $('.center .window img').width();
    picNum = $('.center .window img').size();
    $('.center .window').width(picWidth * picNum);
    function goIndex() {
        goInterval = setInterval(function () {
            $('.center .window img.active').removeClass('active');
            $('.center .bottom a.active').removeClass('active');

            $('.center .bottom a').eq(index).addClass('active');
            $('.center .window img').eq(index).addClass('active');
            index++;
            if (index > 4) {
                clearInterval(goInterval);
                index = 0;
                goIndex();
            }
        }, 3000);
    }
    goIndex();

    $('.center .bottom a').click(function () {
        index = $(this).index('.center .bottom a');
    });
    //显示隐藏
    $('.opBtn').attr('isOpen','1');
    $('.opBtn').click(function () {
        $(this).next().find('.seclectDiv').toggle();
        if($(this).attr('isOpen') == 1){
            $(this).css({'background-size':'8px','background-repeat':'no-repeat','background-image':'url(./img/pro_close.png)'});
            $(this).attr('isOpen',0);
        }else{
            $(this).css({'background-size':'12px','background-image':'url(./img/pro_open.png)'});
            $(this).attr('isOpen',1);
        }
    });
    //左侧选择框位置
    //    $(window).scroll(function () {
    //        hei = $('.main .body .left').height();
    //        scroHei = $(window).scrollTop();
    //        allH = $(document).height();
    //        if(topH > allH - 870 ){
    //            topH2 = allH - 870 - hei;
    //            $('.main .body .left').css({'top': topH2 + 'px'});
    //
    //        }else if(scroHei >= hei-450){
    //            topH = scroHei - hei +450;
    //            $('.main .body .left').css({'top': topH + 'px'});
    //        }
    //    });

    //    右侧排序
    $('.main .body .right .head .btn').not($('.main .body .right .head .btn').eq(3)).attr('up','0');
    $('.main .body .right .head .btn').click(function () {

        if($(this).hasClass('strongTag') && $(this).attr('up') == 0){
            if ($(this).index('.main .body .right .head .btn') == 3){
            }else{
                $(this).css({'background':'url(./img/icon_sortAroow_up.png) no-repeat #86b6c5','background-position':'10px 7px','background-size':'9px'});
                $(this).attr('up',1);
                $('.main .body .right .head .btn').not(this).attr('up',0);
                $('.main .body .right .head .btn').not(this).css({'background':'#d6e2e6'});
            }

        }else if($(this).hasClass('strongTag') && $(this).attr('up') == 1){
            $(this).css({'background':'url(./img/icon_sortAroow_down.png) no-repeat #86b6c5','background-position':'10px 7px','background-size':'9px'});
            $(this).attr('up',0);
            $('.main .body .right .head .btn').not(this).attr('up',0);
            $('.main .body .right .head .btn').not(this).css({'background':'#d6e2e6'});
        }else {
            $('.main .body .right .head .btn').not(this).attr('up',0);
            $('.main .body .right .head .btn').not(this).css({'background':'#d6e2e6'});
            $('.main .body .right .head .btn').removeClass('strongTag');
            $(this).addClass('strongTag');
            $(this).css({'background':'url(./img/icon_sortAroow_down.png) no-repeat #86b6c5','background-position':'10px 7px','background-size':'9px'});
            $(this).attr('up',0);
        }
    });

</script>
</html>