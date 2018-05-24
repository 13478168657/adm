<?php
use App\Models\ActionColumn;
use App\Models\Action;
use App\Models\Category;
$categoryA = Category::where('base_id',1)->orderby('number','asc')->get();
$categoryB = Category::where('base_id',2)->orderby('number','asc')->get();
$categoryC = Category::where('base_id',3)->orderby('number','asc')->get();
?>
<div id="sidebar" class="">
    <nav class="sidebar">
        <div class="sidebar-header"><span class="sidebar-headering">主菜单</span></div>
        <ul class="menuItems">
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>马陆葡萄品种
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    @foreach($categoryA as $catA)
                    <li class="ad_position"><a href="/manage/info?id={{$catA->category_num}}">{{$catA->name}}</a></li>
                    @endforeach
                    <li><a href="/category/list?base_id=1">分类管理</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>马陆葡萄品种
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    @foreach($categoryB as $catB)
                        <li class="ad_position"><a href="/manage/info?id={{$catB->category_num}}">{{$catB->name}}</a></li>
                    @endforeach
                    {{--<li class="ad_position"><a href="/ad/list">巨玫瑰</a></li>--}}
                    {{--<li class="ad_position"><a href="/ad/list">夏黑葡萄</a></li>--}}
                    {{--<li><a href="/adSpace/list">甬优1号</a></li>--}}
                    {{--<li><a href="/adSpace/list">马陆藤年葡萄</a></li>--}}
                    {{--<li><a href="/adSpace/list">巨丰葡萄</a></li>--}}
                    {{--<li><a href="/adSpace/list">醉金香无核葡萄</a></li>--}}
                    <li><a href="/category/list?base_id=2">分类管理</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>马陆葡萄价格
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    @foreach($categoryC as $catC)
                        <li class="ad_position"><a href="/manage/info?id={{$catC->category_num}}">{{$catC->name}}</a></li>
                    @endforeach
                    {{--<li class="ad_position active"><a href="/ad/list">马路葡萄价格</a></li>--}}
                    <li><a href="/category/list?base_id=3">分类管理</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>联系我们
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    <li class="ad_position active"><a href="/consult/list">联系我们</a></li>
                </ul>
            </li>
            {{--<li>--}}
                {{--<a href="javascript:void(0);">--}}
                    {{--<i class="glyphicon glyphicon-dashboard"></i>葡萄知识--}}
                    {{--<i class="glyphicon toggle-icon glyphicon-menu-left"></i>--}}
                {{--</a>--}}
                {{--<ul class="side-ul-menu">--}}
                    {{--<li class="ad_position active"><a href="/ad/list">葡萄知识</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>付款方式
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    <li class="ad_position active"><a href="/ad/list">付款方式</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>批发说明
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    <li class="ad_position active"><a href="/ad/list">批发说明</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>发货须知
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    <li class="ad_position active"><a href="/ad/list">发货须知</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>链接管理
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    <li><a href="/link/list">链接列表</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>广告管理
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu">
                    <li class="ad_position active"><a href="/ad/list">广告列表</a></li>
                    <li><a href="/adSpace/list">广告位列表</a></li>
                </ul>
            </li>
            {{--<li>--}}
                {{--<a href="javascript:void(0);">--}}
                    {{--<i class="glyphicon glyphicon-dashboard"></i>文章管理--}}
                    {{--<i class="glyphicon toggle-icon glyphicon-menu-left"></i>--}}
                {{--</a>--}}
                {{--<ul class="side-ul-menu">--}}
                    {{--<li><a href="/article/list">文章列表</a></li>--}}
                    {{--<li><a href="/position/list">文章分类列表</a></li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            <li>
                <a href="javascript:void(0);">
                    <i class="glyphicon glyphicon-dashboard"></i>用户管理
                    <i class="glyphicon toggle-icon glyphicon-menu-left"></i>
                </a>
                <ul class="side-ul-menu" style="display: block;">
                    <li><a href="/user/list">用户列表</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>