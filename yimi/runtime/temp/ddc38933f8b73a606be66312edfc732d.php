<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"G:\bai\tp5\public/../application/admin\view\cate\list.html";i:1501745270;s:62:"G:\bai\tp5\public/../application/admin\view\common\header.html";i:1501662058;s:60:"G:\bai\tp5\public/../application/admin\view\common\left.html";i:1506684490;}*/ ?>
<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <title></title>

  <meta name="description" content="Dashboard">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!--Basic Styles-->
  <link href="__STATIC__/admin/style/bootstrap.css" rel="stylesheet">
  <link href="__STATIC__/admin/style/font-awesome.css" rel="stylesheet">
  <link href="__STATIC__/admin/style/weather-icons.css" rel="stylesheet">

  <!--Beyond styles-->
  <link id="beyond-link" href="__STATIC__/admin/style/beyond.css" rel="stylesheet" type="text/css">
  <link href="__STATIC__/admin/style/demo.css" rel="stylesheet">
  <link href="__STATIC__/admin/style/typicons.css" rel="stylesheet">
  <link href="__STATIC__/admin/style/animate.css" rel="stylesheet">

</head>
  <body>
    <!-- 头部 -->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="navbar-container">
          <!-- Navbar Barnd -->
          <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
              <small>
                <img src="__STATIC__/admin/images/logo.png" alt="">
              </small>
            </a>
          </div>
          <!-- /Navbar Barnd -->
          <!-- Sidebar Collapse -->
          <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="collapse-icon fa fa-bars"></i>
          </div>
          <!-- /Sidebar Collapse -->
          <!-- Account Area and Settings -->
          <div class="navbar-header pull-right">
            <div class="navbar-account">
              <ul class="account-area">
                <li>
                  <a class="login-area dropdown-toggle" data-toggle="dropdown">
                    <div class="avatar" title="View your public profile">
                      <img src="__STATIC__/admin/images/adam-jansen.jpg">
                    </div>
                    <section>
                      <h2><span class="profile"><span><?php echo \think\Request::instance()->session('admin.manager_name'); ?></span></span></h2>
                    </section>
                  </a>
                  <!--Login Area Dropdown-->
                  <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                    <li class="username"><a>David Stevenson</a></li>
                    <li class="dropdown-footer">
                      <a href="<?php echo url('Manager/logout'); ?>">
                        退出登录
                      </a>
                    </li>
                    <li class="dropdown-footer">
                      <a href="<?php echo url('Manager/edit',['manager_id'=>\think\Request::instance()->session('admin.manager_id')]); ?>">
                        修改密码
                      </a>
                    </li>
                  </ul>
                  <!--/Login Area Dropdown-->
                </li>
                <!-- /Account Area -->
                <!--Note: notice that setting div must start right after account area list.
                    no space must be between these elements-->
                <!-- Settings -->
              </ul>
            </div>
          </div>
          <!-- /Account Area and Settings -->
        </div>
      </div>
    </div>
<!-- /头部 -->

<div class="main-container container-fluid">
  <div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar" id="sidebar">
  <!-- Page Sidebar Header-->
  <div class="sidebar-header-wrapper">
    <input class="searchinput" type="text">
    <i class="searchicon fa fa-search"></i>
    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
  </div>
  <!-- /Page Sidebar Header -->
  <!-- Sidebar Menu -->
  <ul class="nav sidebar-menu">
    <!--Dashboard-->
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text">管理员</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('Manager/index'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-user"></i>
        <span class="menu-text">会员管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('Member/index'); ?>">
                                    <span class="menu-text">
                                        会员列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-file-text"></i>
        <span class="menu-text">分类管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('Cate/index'); ?>">
                                    <span class="menu-text">
                                        分类列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>

        <li>
          <a href="<?php echo url('Cate/addTopCate'); ?>">
                                    <span class="menu-text">
                                        添加顶级分类                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>

      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-file-text"></i>
        <span class="menu-text">商品管理</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo url('Goods/index'); ?>">
                                    <span class="menu-text">
                                        商品列表                                    </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="menu-dropdown">
        <i class="menu-icon fa fa-gear"></i>
        <span class="menu-text">系统</span>
        <i class="menu-expand"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
            <i class="menu-expand"></i>
          </a>
        </li>
      </ul>
    </li>


  </ul>
  <!-- /Sidebar Menu -->
</div>
    <!-- /Page Sidebar -->
    <!-- Page Content -->
    <div class="page-content">
      <!-- Page Breadcrumb -->
      <div class="page-breadcrumbs">
        <ul class="breadcrumb">
          <li>
            <a href="#">系统</a>
          </li>
          <li class="active">分类管理</li>
        </ul>
      </div>
      <!-- /Page Breadcrumb -->

      <!-- Page Body -->
      <div class="page-body">

        <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url("Cate/addAll"); ?>'"> <i class="fa fa-plus"></i> Add
        </button>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
              <div class="widget-body">
                <div class="flip-scroll">
                  <table class="table table-bordered table-hover">
                    <thead class="">
                      <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">分类名称</th>
                        <th class="text-center">cate_pid</th>
                        <th class="text-center">cate_path</th>
                        <th class="text-center">cate_level</th>
                        <th class="text-center">操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($data['data'] as $v): ?>
                      <tr>
                        <td><?php echo $v['cate_id']; ?></td>
                        <td><?php echo $v['cate_name']; ?></td>
                        <td><?php echo $v['cate_pid']; ?></td>
                        <td><?php echo $v['cate_path']; ?></td>
                        <td><?php echo $v['cate_level']; ?></td>
                        <td align="center">
                          <a href="<?php echo url('Cate/addCate',['cate_id'=>$v['cate_id']]); ?>" class="btn btn-primary btn-sm shiny">
                            <i class="fa fa-edit"></i> 添加子分类
                          </a>
                          <a href="<?php echo url('Cate/update',['cate_id'=>$v['cate_id']]); ?>" class="btn btn-primary btn-sm shiny">
                            <i class="fa fa-edit"></i> 编辑
                          </a>
                          <a href="#" onClick="warning('确实要删除吗', '<?php echo url('Cate/delete',['cate_id'=>$v['cate_id']]); ?>')" class="btn btn-danger btn-sm shiny">
                          <i class="fa fa-trash-o"></i> 删除
                          </a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php echo $data['page']; ?>
      </div>
      <!-- /Page Body -->
    </div>
    <!-- /Page Content -->
  </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>