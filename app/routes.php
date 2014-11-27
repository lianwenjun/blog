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
    Route::get('admin/user/login', ['as' => 'user.login', 'uses' => 'UserController@login']);
    Route::post('admin/user/login', ['as' => 'user.login', 'uses' => 'UserController@check']);

    Route::group(['prefix' => 'admin', 'before' => 'adminAuth'], function()
    {   
        Route::get('user/logout', ['as' => 'user.logout', 'uses' => 'UserController@logout']);
        Route::get('add/index', ['as' => 'add.index', 'uses' => 'AddController@index']);
        Route::get('article/index', ['as' => 'article.index', 'uses' => 'ArticleController@index']);
        Route::get('article/del', ['as' => 'article.del', 'uses' => 'ArticleController@del']);
        Route::get('article/updata', ['as' => 'article.update', 'uses' => 'ArticleController@updata']);
        Route::get('category/index', ['as' => 'category.index', 'uses' => 'CategoryController@index']);
        Route::get('menu/index', ['as' => 'menu.index', 'uses' => 'MenuController@index']);
    }); 