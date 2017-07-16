<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index',function(){
   return 'I am admin-index';
});
Route::get('/user/{name}/{id}',function($name,$id){
    return '姓名'.$name.',对应的id值为'.$id;
})->where(['name'=>'[a-zA-Z]+','id'=>'\d+']);

Route::get('/home/user',['as'=>'name',function(){
    return route('name');   //route函数是根据路由别名来获取路由的
}]);
Route::get('/user/add','UserController@add');
Route::get('/user/index','UserController@index');

Route::get('/demo','Admin\DemoController@demo');
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){   //这个是分组 所以要用group而不是用get
    Route::get('add','UserController@add');
    Route::get('del','UserController@del');
    Route::get('edit','UserController@edit');
    Route::get('index','UserController@index');
});

Route::get('/member/add','MemberController@add');
Route::get('/member/del','MemberController@del');
Route::get('/member/update','MemberController@update');
Route::get('/member/index','MemberController@index');
Route::get('demo','MemberController@demo');