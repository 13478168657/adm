@extends('layouts.main')
@section('title')
    <title>文章列表</title>
@endsection
@section('content')
    <div class="main" id="mainWrapper">
        <h3>内容</h3>
        <div class="wrapper table-scroll-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <a href="/base/create"><button class="btn btn-success btn-xs pull-right">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    添加
                                </button></a>
                            <h6 class="panel-title">快捷键</h6>
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
                                <th>网站标题</th>
                                <th>网站名称</th>
                                <th>关键字</th>
                                <th>描述</th>
                                <th>联系电话</th>
                                <th>联系方式</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            @foreach($configs as $config)
                                <tr>
                                    <td>{{$config->title}}</td>
                                    <td>{{$config->name}}</td>
                                    <td>{{$config->home_key_word}}</td>
                                    <td>{{$config->home_meta_description}}</td>
                                    <td>{{$config->link_mobile}}</td>
                                    <td>{{$config->link_style}}</td>
                                    <td><a onclick="del(this);" href="javascript:void(0);" data-id="{{$config->id}}">删除</a>／<a href="/base/edit?id={{$config->id}}">修改</a></td>
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
                    url:'/base/del',
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