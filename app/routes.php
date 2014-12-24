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

        Route::get('article/addIndex', ['as' => 'article.addIndex', 'uses' => 'ArticleController@addIndex']);
        Route::post('article/addArticle', ['as' => 'article.addArticle', 'uses' => 'ArticleController@addArticle']);

        Route::get('article', ['as' => 'article.index', 'uses' => 'ArticleController@index']);
        Route::get('article/downloadExcel', ['as' => 'article.excel', 'uses' => 'ArticleController@downloadExcel']);
        Route::get('article/del/{id}', ['as' => 'article.del', 'uses' => 'ArticleController@del']);
        Route::get('article/update/{id}', ['as' => 'article.update', 'uses' => 'ArticleController@update']);
        Route::post('article/doUpdate', ['as' => 'article.doupdate', 'uses' => 'ArticleController@doupdate']);

        Route::get('category', ['as' => 'category.index', 'uses' => 'CategoryController@index']);
        Route::get('category/del/{id}', ['as' => 'category.del', 'uses' => 'CategoryController@del']);
        Route::post('category/add', ['as' => 'category.add', 'uses' => 'CategoryController@add']);

        Route::get('comment', ['as' => 'comment.index', 'uses' => 'CommentController@index']);
        Route::get('comment/del/{id}', ['as' => 'comment.del', 'uses' => 'CommentController@del']);
        Route::get('comment/update/{id}', ['as' => 'comment.update', 'uses' => 'CommentController@update']);
        
        Route::get('photo', ['as' => 'photo.index', 'uses' => 'PhotoController@index']); // 相片列表
        Route::post('photo/imgUpload', ['as' => 'photo.imgUpload', 'uses' => 'PhotoController@imgUpload']); 
    }); 