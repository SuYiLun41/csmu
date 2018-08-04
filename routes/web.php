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
//前台
Route::get('/', 'FrontController@index');   //首頁
Route::get('teacher_info', 'FrontController@teacher_info');  //師資介紹

// 登入 登出
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');

// 註冊
Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Auth\RegisterController@register');


//後台
Route::group(['prefix'=>'admin','middleware' => 'auth','as' => 'admin.'],function (){
    Route::get('/', 'Admin\HomeController@index')->name('home');

    //文章-類別
    Route::get('/article_type','Admin\ArticleController@article_type')->name('article_type_index');
    Route::get('/article_type/create','Admin\ArticleController@article_type_create')->name('article_type_create');
    Route::post('/article_type/store','Admin\ArticleController@article_type_store')->name('article_type_store');
    Route::get('/article_type/edit/{id}','Admin\ArticleController@article_type_edit')->name('article_type_edit');
    Route::post('/article_type/update/{id}','Admin\ArticleController@article_type_update')->name('article_type_update');
    Route::post('/article_type/delete/{id}','Admin\ArticleController@article_type_delete')->name('article_type_delete');
    //文章
    Route::get('/article','Admin\ArticleController@article')->name('article_index');
    Route::get('/article/create','Admin\ArticleController@article_create')->name('article_create');
    Route::post('/article/store','Admin\ArticleController@article_store')->name('article_store');
    Route::get('/article/edit/{id}','Admin\ArticleController@article_edit')->name('article_edit');
    Route::post('/article/update/{id}','Admin\ArticleController@article_update')->name('article_update');
    Route::post('/article/delete/{id}','Admin\ArticleController@article_delete')->name('article_delete');
});


