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

/*
Route::get('/', function () {
    return view('index');
}); */

/* 首頁 */
Route::get('/', 'HomelogoController@index');
/* About */
Route::get('/about', function () {
    return view('about');
});
/* 顯示文章 */
Route::get('/article', 'ArticleController@list');
Route::get('/article/{article}', 'ArticleController@show');

/* 管理後台 */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/* 發佈文章 */
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/create', 'Admin\ArticleController@create');
    Route::post('article', 'Admin\ArticleController@store');
    Route::delete('article/{article}', 'Admin\ArticleController@delete')->name('admin.article.delete');
    Route::get('article/update/{article}', 'Admin\ArticleController@update')->name('admin.article.update');
    Route::post('article/update/{article}', 'Admin\ArticleController@updatestore');
});