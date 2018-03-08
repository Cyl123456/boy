<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin2.0</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('static/admin/css/font.css')}}">
	<link rel="stylesheet" href="{{asset('static/admin/css/xadmin.css')}}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('static/admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('static/admin/js/xadmin.js')}}"></script>

</head>
<body class="login-bg">
    
    <div class="login">
        <div class="message">x-admin2.0-管理登录</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" action="{{url('auth/login')}}" class="layui-form" >
            {{csrf_field()}}

            <input name="email" placeholder="邮箱"  type="text"  >
            <hr class="hr15">
            <input name="password" type="password" placeholder="密码">
            <hr class="hr15">
            <input name="captcha" type="text" placeholder="验证码" style="width:55%;"> {!!captcha_img()!!}
            <hr class="hr15">
            <input name="remember"  type="checkbox" >记住密码
            <hr class="hr15">
            <input value="登录" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{url('auth/register')}}">没有账号?去注册</a>
        <br>
        <a href="{{url('password/email')}}">忘记密码?通过邮箱找回</a>

    </div>
    
    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
            });
        })

        
    </script>
</body>
</html>