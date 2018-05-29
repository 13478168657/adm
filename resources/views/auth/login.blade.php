<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/login.js"></script>
</head>
<body>
<div class="page">
    <div class="loginwarrp">
        <div class="logo">后台管理系统登陆</div>
        <div class="login_form">
            <form id="Login" name="Login" method="post" onsubmit="return false;" action="/auth/login">
                <li class="login-item">
                    <span>用户名：</span>
                    <input type="text" id="name" name="name" class="login_input" >
                    <span id="count-msg" class="error"></span>
                </li>
                <li class="login-item">
                    <span>密　码：</span>
                    <input type="password" id="password" name="password" class="login_input" >
                    <span id="password-msg" class="error"></span>
                </li>
                <li class="login-item verify">
                    <span>验证码：</span>
                    <input type="text" id="captcha" name="captcha" class="login_input verify_input">
                    <img  class="captcha"  src="{{ captcha_src() }}"  onclick="this.src='/captcha/default?'+Math.random()"  title="点击图片更新验证码"/>
                </li>
                <li class="login-item verify">
                    <span id="captcha-msg" class="error"></span>
                </li>
                <div class="clearfix"></div>
                <li class="login-sub">
                    <input type="submit" name="Submit" value="登录" onclick="postLogin()" />
                    <input type="reset" name="Reset" value="重置" />
                </li>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function() {
        var config = {
            vx : 4,
            vy : 4,
            height : 2,
            width : 2,
            count : 100,
            color : "121, 162, 185",
            stroke : "100, 200, 180",
            dist : 6000,
            e_dist : 20000,
            max_conn : 10
        }
        CanvasParticle(config);
    }
    function postLogin(){
        var name = $("#name").val();
        var password = $("#password").val();
        var captcha = $("#captcha").val();
        var token =  '{{csrf_token()}}';
        var data = {'name':name,'password':password,'captcha':captcha,'_token':token};
        $.ajax({
            url:'/auth/login',
            data:data,
            method:'POST',
            dataType:'json',
            success:function(res){
                if(res.code == 0){
                    window.location.href="/";
                }else{
                    if(res.code == 2){
                        $("#captcha-msg").text('验证码有误');
                    }else{
                        $("#password-msg").text('用户名或密码错误');
                    }
                    return false;
                }
            }
        });
    }
</script>
<script type="text/javascript" src="/js/canvas-particle.js"></script>
</body>
</html>