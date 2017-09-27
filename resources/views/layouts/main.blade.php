<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	@yield('title')
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="/css/main.css" media="all" />
	<link rel="stylesheet" href="/css/news.css" media="all" />
</head>
<body class="main_body">
<div class="layui-layout layui-layout-admin">
	<!-- 顶部 -->
	<div class="layui-header header">
		<div class="layui-main">
			<a href="" class="logo">后台管理</a>
			<!-- 搜索 -->
			<div class="layui-form component">
				<i class="layui-icon">&#xe615;</i>
			</div>
			<!-- 顶部右侧菜单 -->
			<ul class="layui-nav top_menu">
				<li class="layui-nav-item showNotice" id="showNotice" pc>
					<a href="javascript:;"><i class="iconfont icon-gonggao"></i><cite>系统公告</cite></a>
				</li>
				<li class="layui-nav-item" mobile>
					<a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>设置</cite></a>
				</li>
				<li class="layui-nav-item" mobile>
					<a href="javascript:;"><i class="iconfont icon-loginout"></i> 退出</a>
				</li>
				<li class="layui-nav-item lockcms" pc>
					<a href="javascript:;"><i class="iconfont icon-lock1"></i><cite>锁屏</cite></a>
				</li>
				<li class="layui-nav-item" pc>
					<a href="javascript:;">
						<img src="images/face.jpg" class="layui-circle" width="35" height="35">
						<cite>请叫我马哥</cite>
					</a>
					<dl class="layui-nav-child">
						<dd><a href="javascript:;" data-url="page/user/userInfo.html"><i class="iconfont icon-zhanghu" data-icon="icon-zhanghu"></i><cite>个人资料</cite></a></dd>
						<dd><a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>修改密码</cite></a></dd>
						<dd><a class="userLogout" href="logout"><i class="iconfont icon-loginout"></i><cite>退出</cite></a></dd>
					</dl>
				</li>
			</ul>
		</div>
	</div>
	<!-- 左侧导航 -->
	@include('layouts.leftmenu');
	<!-- 右侧内容 -->
	@yield('content')
	<!-- 底部 -->
	<div class="layui-footer footer">

	</div>
</div>

<!-- 锁屏 -->
<div class="admin-header-lock" id="lock-box" style="display: none;">
	<div class="admin-header-lock-img"><img src="images/face.jpg"/></div>
	<div class="admin-header-lock-name" id="lockUserName">请叫我马哥</div>
	<div class="input_btn">
		<input type="password" class="admin-header-lock-input layui-input" placeholder="请输入密码解锁.." name="lockPwd" id="lockPwd" />
		<button class="layui-btn" id="unlock">解锁</button>
	</div>
	<p>请输入“123456”，否则不会解锁成功哦！！！</p>
</div>
<!-- 移动导航 -->
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>

<script type="text/javascript" src="/layui/layui.js"></script>
<script type="text/javascript" src="/js/nav.js"></script>
<script type="text/javascript" src="/js/leftNav.js"></script>
<script type="text/javascript" src="/js/index.js"></script>
<script src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/login.js"></script>
@yield('script')
</body>
</html>