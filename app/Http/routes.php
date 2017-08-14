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
//文章中的列表和详情
Route::group(['prefix' => 'Article', 'namespace' => 'Article'], function(){
    // Route::controller('sharetrack', 'ShareTrackController');
    Route::resource('list', 'ArticleController');
    Route::get('details/{artid}', 'ArticleController@articleInfo');
});
Route::group(['prefix' => 'User', 'namespace' => 'User'], function(){
    Route::resource('checkLogins', 'UserController');
});
//用户详情
// Route::group(['prefix' => 'User', 'namespace' => 'User'], function(){
//     // Route::controller('sharetrack', 'ShareTrackController');
//     Route::resource('info', 'UserController');
//     Route::resource('details', 'ArticleController');
// });
//post用户发表文章
//后台管理系统
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('index', 'IndexController');
    Route::resource('login','LoginController');//后台用户登录/修改/退出
    Route::resource('user','UserController');//用户管理
    Route::resource('common','CommonController');//留言管理
    Route::resource('category','CategoryController');//分类管理
    Route::resource('article','ArticleController');//文章管理
    Route::resource('config','ConfigController');//配置信息
});