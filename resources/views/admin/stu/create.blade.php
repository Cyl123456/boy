<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('static/admin/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('static/admin/css/xadmin.css')}}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('static/admin/lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('static/admin/js/xadmin.js')}}"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="{{url('admin/stus')}}">首页</a>
        <a href="{{url('admin/stus/create')}}">添加</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
        <form class="layui-form" action="{{url('/admin/stus')}}" method="post">
          {{csrf_field()}}
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>姓名
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="name" class="layui-input" value="{{old('name')}}">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">@if($errors->has('name')) *{{$errors->first('name')}} @endif</span>
              </div>
          </div>
          <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>性别
            </label>
            <input type="radio" name="sex" value="m" title="男" checked>
            <input type="radio" name="sex" value="w" title="女" >
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>年龄
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="age" class="layui-input" value="{{old('age')}}">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">@if($errors->has('age')) *{{$errors->first('age')}} @endif</span>
              </div>
          </div>
          <div class="layui-form-item">
              <label for="username" class="layui-form-label">
                  <span class="x-red">*</span>班级
              </label>
              <div class="layui-input-inline">
                  <input type="text" name="class" class="layui-input" value="{{old('class')}}">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">@if($errors->has('class')) *{{$errors->first('class')}} @endif</span>
              </div>
          </div>
          
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  增加
              </button>
          </div>
      </form>
    </div>
    <script>
        // layui.use(['form','layer'], function(){
        //     $ = layui.jquery;
        //   var form = layui.form
        //   ,layer = layui.layer;
        // });
    </script>
  </body>

</html>