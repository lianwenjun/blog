<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('id', '[0-9]+');
Route::pattern('status', '[0-9]+');
Route::pattern('pageSize', '[0-9]+');
Route::pattern('pageIndex', '[0-9]+');

Route::get('/', function()
{
	return View::make('hello');
});
//后台文件
Route::get('admin/login/index', ['as' => 'login.index', 'uses' => 'LoginController@index']);
Route::put('admin/login/check', ['as' => 'login.index', 'uses' => 'LoginController@check']);
Route::group(['prefix' => 'admin', 'before' => 'adminAuth'], function()
{	
	Route::get('add/index', ['as' => 'add.index', 'uses' => 'AddController@index']);
	
	//Route::put('/login/signin', ['as' => 'login.signin', 'uses' => 'Admin_LoginController@doSignin']);
});