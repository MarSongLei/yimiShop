<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"G:\yimi\tp5\public/../application/index\view\index\index.html";i:1506686314;s:63:"G:\yimi\tp5\public/../application/index\view\common\header.html";i:1501912732;s:63:"G:\yimi\tp5\public/../application/index\view\common\footer.html";i:1501833286;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一米市集Yimishiji|跟友善农夫，买一份诚食</title>
    <!--1.11.1-->
    <script src="__STATIC__/index/js/jquery.min.js"></script>
    <script src="__STATIC__/index/js/index.js"></script>
    <script src="__STATIC__/index/js/index2.js"></script>
    <link rel="stylesheet" href="__STATIC__/index/css/index.css">
    <link rel="stylesheet" href=" __STATIC__/index/css/index2.css">
    <link rel="stylesheet" href=" __STATIC__/index/css/common.css">
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
    <!--nav-->
    <!--广告轮播图-->
    <div class="banner">
        <div class="banner_show">
            <a href=""  style="display: block"><img src="__STATIC__/index/image/banner_1.jpg" alt="" class="img"></a>
            <a href=""><img src="__STATIC__/index/image/banner_2.jpg" alt="" class="img"></a>
            <a href=""><img src="__STATIC__/index/image/banner_3.jpg" alt="" class="img"></a>
            <a href=""><img src="__STATIC__/index/image/banner_4.jpg" alt="" class="img"></a>
            <a href=""><img src="__STATIC__/index/image/banner_5.jpg" alt="" class="img"></a>
        </div>
        <div class="btn">
            <a>1-5单新鲜食材大采购</a>
            <a>亲子买菜基金</a>
            <a>纸袋回收计划</a>
            <a>轻体买菜基金</a>
            <a>10分钟搞定快手菜</a>
            <div class="progress"></div>
        </div>
    </div>
    <div class="container wp">
        <div class="simpleBlogArticle">
            <div>
                <a href="" class="js_count" attr="可以喝的沙拉">
                    <img class="img-responsive" alt="可以喝的沙拉" src="__STATIC__/index/image/pict1.jpg">
                </a>
            </div>
            <div>
                <p>
                    <a href="" class="js_count" attr="可以喝的沙拉">
                        可以喝的沙拉
                    </a>
                </p>
                <div class="abstract">
                    均衡全食饮，可以喝的沙拉！1瓶包含10种蔬果、粗粮谷物、植物蛋白
                    ，维生素和酶的活性完整保存。红瓶抗氧化，绿瓶清肠道，健康好味道！
                </div>
            </div>
        </div>
        <div class="simpleBlogArticle">
            <div>
                <a href="" class="js_count" attr="优惠专区">
                    <img class="img-responsive" alt="优惠专区" src="__STATIC__/index/image/pict2.jpg">
                </a>
            </div>
            <div>
                <p>
                    <a href="" class="js_count" attr="优惠专区">
                        优惠专区
                    </a>
                </p>
                <div class="abstract">
                    在这个优惠自选区里，有很多好的食材值得一试，
                    只要经过简单的处理，就可以享受到美食的味道。
                </div>
            </div>
        </div>
        <div class="simpleBlogArticle">
            <div>
                <a href="" class="js_count" attr="杨浦区暂停上午配送">
                    <img class="img-responsive" alt="杨浦区暂停上午配送" src="__STATIC__/index/image/pict3.jpg">
                </a>
            </div>
            <div>
                <p>
                    <a href="" class="js_count" attr="杨浦区暂停上午配送">
                        杨浦区暂停上午配送
                    </a>
                </p>
                <div class="abstract">
                    因近期订单暴增，即日起杨浦区暂时取消上午时段配送，敬请谅解。
                </div>
            </div>
        </div>
        <div class="simpleBlogArticle" style="margin-right: 0">
            <div>
                <a href="" class="js_count" attr="膳博士冰鲜黑猪肉">
                    <img class="img-responsive" alt="膳博士冰鲜黑猪肉" src="__STATIC__/index/image/pict4.jpg">
                </a>
            </div>
            <div>
                <p>
                    <a href="https://www.yimishiji.com/farmer-481.html" class="js_count" attr="膳博士冰鲜黑猪肉">
                        膳博士冰鲜黑猪肉
                    </a>
                </p>
                <div class="abstract">
                    喝山中水，吃五谷杂粮、苜蓿草，慢慢长足10个月的
                    「太湖黑」，猪肉胶原蛋白丰富，鲜香美味。
                </div>
            </div>
        </div>
    </div>
    <!--热购商品-->
    <div class="regou borderD divModel">
        <div class="regouLeft fl">
            <img src="__STATIC__/index/img/regou.jpg" alt="" class="fl hImg">
            <div class="regou1 fl">
                <span class="numSpan">1</span>
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                        <div class="numDiv" id="firNumDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div>

        </div>
        <div class="regouRight fl y" style="width: 860px;">
            <?php foreach($data as $key=>$val): ?>
            <div class="regouR fl">
                <span class="numSpan"><?php echo $key + 2; ?></span>
                <dl>
                    <a href="<?php echo url('Item/index',['goods_id'=>$val['goods_id']]); ?>">
                        <dd>
                            <img src="<?php echo $val['image_m_url']; ?>" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                    </a>
                    <dt>
                    <h4><a href="<?php echo url('Item/index',['goods_id'=>$val['goods_id']]); ?>"><?php echo $val['goods_name']; ?></a></h4>
                    <p>
                        <button><?php echo $val['keywords']; ?></button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money"><?php echo $val['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--2-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--新到尖货-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/xindaojianhuo.jpg" alt=""></a>
            <a href="#"><h4>更多新到尖货 >></h4></a>
        </div>
        <div class="right fl y" style="width: 860px">
            <?php foreach($dataNew as $key=>$v): ?>
            <div class="modelI fl">
                <dl>
                    <a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>">
                        <dd>
                            <img src="<?php echo $v['image_m_url']; ?>" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                    </a>
                    <dt>
                    <h4 style="white-space: nowrap;overflow: hidden"><a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></h4>
                    <p>
                        <button>Bostack</button>
                        <span class="likeP">550</span>g/份
                    </p>
                    <p class="money">￥<span class="money"><?php echo $v['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--1-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--安全水果-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/anquanshuiguo.jpg" alt=""></a>
            <a href="#"><h4>更多安全水果 >></h4></a>
        </div>
        <div class="right fl y" style="width: 860px">
            <?php foreach($dataSafe as $key=>$v): ?>
            <div class="modelI fl">
                <dl>
                    <a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>">
                        <dd>
                            <img src="<?php echo $v['image_m_url']; ?>" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                    </a>
                    <dt>
                    <h4 style="white-space: nowrap;overflow: hidden"><a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></h4>
                    <p>
                        <button>Bostack</button>
                        <span class="likeP">550</span>g/份
                    </p>
                    <p class="money">￥<span class="money"><?php echo $v['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--1-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--四时菜蔬-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/sishishishu.jpg" alt=""></a>
            <a href="#"><h4>更多四时菜蔬 >></h4></a>
        </div>
        <div class="right fl y" style="width: 860px">
            <?php foreach($dataVeg as $key=>$v): ?>
            <div class="modelI fl">
                <dl>
                    <a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>">
                        <dd>
                            <img src="<?php echo $v['image_m_url']; ?>" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                    </a>
                    <dt>
                    <h4 style="white-space: nowrap;overflow: hidden"><a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></h4>
                    <p>
                        <button>Bostack</button>
                        <span class="likeP">550</span>g/份
                    </p>
                    <p class="money">￥<span class="money"><?php echo $v['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--1-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--肉禽蛋品-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/rouqindanpin.jpg" alt=""></a>
            <a href="#"><h4>更多肉禽蛋品 >></h4></a>
        </div>
        <div class="right fl y" style="width: 860px">
            <?php foreach($dataMeat as $key=>$v): ?>
            <div class="modelI fl">
                <dl>
                    <a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>">
                        <dd>
                            <img src="<?php echo $v['image_m_url']; ?>" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                    </a>
                    <dt>
                    <h4 style="white-space: nowrap;overflow: hidden"><a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></h4>
                    <p>
                        <button>Bostack</button>
                        <span class="likeP">550</span>g/份
                    </p>
                    <p class="money">￥<span class="money"><?php echo $v['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--1-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--粮油酱醋-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/liangyoujiangchu.jpg" alt=""></a>
            <a href="#"><h4>更多粮油酱醋 >></h4></a>
        </div>
        <div class="right fl y" style="width: 860px">
            <?php foreach($dataMice as $key=>$v): ?>
            <div class="modelI fl">
                <dl>
                    <a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>">
                        <dd>
                            <img src="<?php echo $v['image_m_url']; ?>" alt="" class="goodsImg">
                            <div class="youhuiDiv">
                                <img src="__STATIC__/index/img/new.png" alt="" class="youhuiImg">
                            </div>
                            <div class="numDiv">
                                <span>0</span>
                                <button class="reduceBtn">-</button>
                                <button class="addBtn">+</button>
                            </div>
                        </dd>
                    </a>
                    <dt>
                    <h4 style="white-space: nowrap;overflow: hidden"><a href="<?php echo url('Item/index',['goods_id'=>$v['goods_id']]); ?>"><?php echo $v['goods_name']; ?></a></h4>
                    <p>
                        <button>Bostack</button>
                        <span class="likeP">550</span>g/份
                    </p>
                    <p class="money">￥<span class="money"><?php echo $v['sell_price']; ?></span></p>
                    </dt>
                </dl>
            </div><!--1-->
            <?php endforeach; ?>
        </div>
    </div>
    <!--水中鲜物-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/shuizhongxianwu.jpg" alt=""></a>
            <a href="#"><h4>更多水中鲜物 >></h4></a>
        </div>
        <div class="right fl">
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--2-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--3-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--4-->
            <div class="fc"></div>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--5-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--6-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--7-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--8-->
        </div>
    </div>
    <!--零食酒饮-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/lingshijiuyin.jpg" alt=""></a>
            <a href="#"><h4>更多零食酒饮 >></h4></a>
        </div>
        <div class="right fl">
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--2-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--3-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--4-->
            <div class="fc"></div>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--5-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--6-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--7-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--8-->
        </div>
    </div>
    <!--面点小食-->
    <div class="divModel borderD">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/miandianxiaoshi.jpg" alt=""></a>
            <a href="#"><h4>更多面点小食 >></h4></a>
        </div>
        <div class="right fl">
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--2-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--3-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--4-->
            <div class="fc"></div>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--5-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--6-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--7-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--8-->
        </div>
    </div>
    <!--乳制品类-->
    <div class="divModel ">
        <div class="left fl">
            <a href="#"><img src="__STATIC__/index/img/ruzhidoupin.jpg" alt=""></a>
            <a href="#"><h4>更多乳制品类 >></h4></a>
        </div>
        <div class="right fl">
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--2-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--3-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--4-->
            <div class="fc"></div>
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--5-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--6-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--7-->
            <div class="modelI fl">
                <dl>
                    <dd>
                        <img src="__STATIC__/index/img/putao.jpg" alt="" class="goodsImg">
                        <div class="youhuiDiv">
                            <img src="__STATIC__/index/img/5zhe.png" alt="" class="youhuiImg">
                        </div>
                        <div class="numDiv">
                            <span>0</span>
                            <button class="reduceBtn">-</button>
                            <button class="addBtn">+</button>
                        </div>
                    </dd>
                    <dt>
                    <h4><a href="">零农残南汇8424</a></h4>
                    <p>
                        <button>原农公社</button>
                        <span class="likeP">4500</span>g/份
                    </p>
                    <p class="money">￥<span class="money">79.00</span></p>
                    </dt>
                </dl>
            </div><!--8-->
        </div>
    </div>
</div>
<!--做个选择-->
<div class="chioseBg fc">
    <div class="chiose fc">
        <div class="logo fl">
            <img src="__STATIC__/index/img/zuogexuanze.jpg" alt="">
        </div>
        <div class="data fl">
            <p>
                每一口放进嘴里的食物，从哪里来、如何耕种与饲养、如何采摘与包装等都会影响生态环境的可持续性。一米市集倡导有意念的吃，希望每个人都能关心食物的来历，在进食之前，想一想这些食物从产地搬到餐桌的一路上经历了什么，然后做个选择。</p>
        </div>
        <div class="menu fl">
            <div class="icon">
                <img src="__STATIC__/index/img/icon1.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>小农栽种</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>
            <div class="icon">
                <img src="__STATIC__/index/img/icon2.jpg" alt="">
                <span>可持续发展</span>
            </div>

        </div>
    </div>
</div>
<!--主要内容-->
<div class="container fc">
    <!--厨房格言-->
    <div class="kitchen borderT">
        <div class="logo fl">
            <img src="__STATIC__/index/img/chufanggeyan.jpg" alt="">
        </div>
        <div class="contain fl">
            <div class="d1 fl">
                <img src="__STATIC__/index/img/yu.jpg" alt="">
            </div>
            <div class="d2 fl">
                <h3>三文鱼冰鲜出击</h3>
                <p>
                    鲜艳的橙色，厚身的质地，层层叠叠的纹理，即使是静静地躺在浅浅的瓷盘里，三文鱼也发出诱惑的光芒，在喜爱它的人眼中，钻石切面的光辉也不过如此；用筷子夹起一块放入口中，鱼的极鮮美味也大抵如此。
                    <a href="">阅读更多...</a>
                </p>
            </div>
            <div class="d3 fc divModel">
                <div class="right fl">
                    <dl>
                        <dd>
                            <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                </div>
                <div class="right fl">
                    <dl>
                        <dd>
                            <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                </div>
                <div class="right fl">
                    <dl>
                        <dd>
                            <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                </div>
                <div class="right fl">
                    <dl>
                        <dd>
                            <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                </div>
                <div class="right fl">
                    <dl>
                        <dd>
                            <img src="__STATIC__/index/img/nangua.jpg" alt="" class="goodsImg">
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
                </div>
            </div>
        </div>
        <!--右侧商品列表-->
        <div class="rightList">
            <div class="borderD">
                <img src="__STATIC__/index/img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/img/xiariliangcai.jpg" alt="">
                <span>夏日凉菜</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
            <div class="borderD">
                <img src="__STATIC__/index/img/sanwenyu.jpg" alt="">
                <span>三文鱼</span>
            </div>
        </div>
    </div>
    <!--食物记事-->
    <div class="borderT food fc">
        <div class="logo fl">
            <img src="__STATIC__/index/img/shiwujishi.jpg" alt="">
        </div>
        <div class="d1 fl">
            <img src="__STATIC__/index/img/foodImg1.jpg" alt="">
            <h4><a href="">食物潮流</a></h4>
            <p>过去几年发生的多起食安危机、历史古都拒绝麦当劳进驻的抗议事件、3D打样餐点的出现，慢慢地在人们的心里发酵，新进而来的思潮在食物体系里掀起了一阵旋风。</p>
        </div>
        <div class="d2 fl">
            <img src="__STATIC__/index/img/foodImg2.jpg" alt="">
            <h4><a href="">我们真的需要感谢这只小虫</a></h4>
            <p>没错，是蜜蜂。感谢它，不仅是因为它酿出的蜂蜜，也不仅因为它天生勤劳的品性，而是因为它无与伦比的重要性。是感恩，也是警醒，因为这只小虫深陷困境，而它们的困境也会成为人类的困境。</p>
        </div>
        <div class="d2 fr">
            <img src="__STATIC__/index/img/foofImg3.jpg" alt="">
            <h4><a href="">我们为什么决定下架蓝鳍金枪鱼？</a></h4>
            <p>10月14日，一米市集上架蓝鳍金枪鱼；11月6日，用户建议一米市集下架蓝鳍金枪鱼；11月11日，一米市集下架蓝鳍金枪鱼。</p>
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
</html>