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


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {


    Route::get('/main/code', 'MainController@code');
    Route::get('/main/menu', 'MainController@menu');
    Route::get('/main/second', 'MainController@second');
    Route::get('/main/dyna_menu', 'MainController@dyna_menu');
    Route::get('/main/operation', 'MainController@operation');


    Route::group(['prefix' => 'article'], function () {
        Route::get('/type', 'ArticleTypeController@index');
        Route::get('/', 'ArticleController@index');
        Route::get('/dataList', 'ArticleController@dataList');
    });


    Route::get('/', 'IndexController@index');


});

