<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');//加载登陆页面
Route::post('auth/login', 'Auth\AuthController@postLogin');//执行登陆
Route::get('auth/logout', 'Auth\AuthController@getLogout');//退出
Route::get('auth/loginid','Auth\AuthController@getLoginid');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');//加载注册页面
Route::post('auth/register', 'Auth\AuthController@postRegister');//执行注册

// 密码重置链接的路由...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置的路由...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',function(){
	return view('admin.index');
})->middleware('auth');




Route::get('admin/welcome',function(){
	return view('admin.welcome');
});	
// 查看
Route::get('admin/delete/{id}','Admin\Stucontroller@destroy');
Route::resource('/admin/stus','Admin\Stucontroller');
