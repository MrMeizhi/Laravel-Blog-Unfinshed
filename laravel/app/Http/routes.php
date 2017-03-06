<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//前台界面

Route::get('/',['uses'=>'ArticleController@index']);

Route::get('article/{id}', ['uses' => 'ArticleController@showArticle'])->where('id','[0-9]+');

Route::get('type/{type}', ['uses' => 'ArticleController@showArticleList'])->where('type','[A-z]+');

Route::post('search/',['uses'=>'ArticleController@doSearchArticle']);


Route::post('sendComment/',['uses'=>'ArticleController@sendArticleComment']);




//后台管理


Route::get('meizhi_admin/',['uses'=>'AdminController@adminLogin']);

Route::post('sendAdmin/',['uses' => 'AdminController@adminConfirm']);

Route::get('indexAdmin/',['uses' => 'AdminController@adminIndex']);

//Route::group(['prefix' => 'ajax','namespace'=>'Ajax'],function (){
//   Route::post('sendComment/',['uses'=>'ArticleController@sendArticleComment']);
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
/*
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
*/