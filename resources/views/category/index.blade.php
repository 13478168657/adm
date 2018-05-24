@extends('layouts.main')
@section('title')
    <title>后台首页</title>
@endsection
@section('content')
    <div class="main" id="mainWrapper">
        <h3>分类管理</h3>
        <div class="wrapper table-scroll-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <a href="/category/create?base_id={{$base_id}}"><button class="btn btn-success btn-xs pull-right">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    添加
                                </button></a>
                            <h6 class="panel-title">快捷键</h6>
                        </div>
                        <div class="panel-body" style="">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <form class="form-inline">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group input-group-sm">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">状态</div>
                                                        <select id="order_sale_type" name="sale_type" class="form-control">
                                                            <option value="0" selected="selected">
                                                                全部
                                                            </option>
                                                            <option value="1">
                                                                不通过</option>
                                                            <option value="2">
                                                                待审核</option>
                                                            <option value="3">
                                                                通过</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group-sm">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">用户名</div>
                                                        <input value="" placeholder="用户名" id="" class="form-control" name="name" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group input-group-sm">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">手机号</div>
                                                        <input class="form-control" name="mobile" placeholder="手机号" value="" id="" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>分类名称</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->number}}</td>
                                    <td>{{$category->name}}</td>
                                    <td><a onclick="del(this);" href="javascript:void(0);" data-id="{{$category->id}}">删除</a>/<a href="/category/edit?id={{$category->id}}">修改</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function del(obj){
            var judge = confirm("确认删除");
            if(judge){
                var _token = '{{csrf_token()}}';
                var id = $(obj).attr('data-id');
                var data = {id:id,_token:_token};
                $.ajax({
                    url:'/category/del',
                    data:data,
                    dataType:'json',
                    type:'POST',
                    success:function(data){
                        alert(data.msg);
                        window.location.href="";
                    }
                });
            }
        }
    </script>
@endsection