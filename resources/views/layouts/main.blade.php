<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	@yield('title')
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"/>

	<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css" />
	<script src="/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/My97DatePicker/WdatePicker.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<link href="/css/left.css" rel="stylesheet"  />
	<link href="/css/head.css" rel="stylesheet"/>
	<link href="/css/main.css" rel="stylesheet"/>
	<link href="/css/bs.css" rel="stylesheet"/>
	<script src="/js/left.js"></script>
</head>
<body>
@include('layouts.header')
<div id="container" class="container-fluid">
	@include('layouts.leftmenu')
	@yield('content')
</div>
@yield('css')
@yield('script')
<script>
	$(function(){

	});
</script>
</body>
</html>