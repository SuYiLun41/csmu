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

// 登入&登出
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 後台
Route::group(['prefix'=>'admin','middleware' => 'auth','as' => 'admin.'],function (){
    Route::get('/', 'Admin\HomeController@index')->name('home');    // 後台首頁
    Route::post('/delete_upload_file', 'Admin\HomeController@file_delete')->name('file_delete');    // 後台首頁

    Route::get('/article_type','Admin\ArticleController@article_type')->name('article_type_index'); // 文章類別-列表
    Route::post('/article_type/store','Admin\ArticleController@article_type_store')->name('article_type_store');    // 文章類別-儲存
    Route::get('/article_type/edit/{id}','Admin\ArticleController@article_type_edit')->name('article_type_edit');   // 文章類別-編輯
    Route::post('/article_type/update/{id}','Admin\ArticleController@article_type_update')->name('article_type_update');    // 文章類別-更新
    Route::post('/article_type/delete/{id}','Admin\ArticleController@article_type_delete')->name('article_type_delete');    // 文章類別-刪除

    Route::get('/article','Admin\ArticleController@article')->name('article_index'); // 文章-列表
    Route::get('/article/create','Admin\ArticleController@article_create')->name('article_create'); // 文章-新增
    Route::post('/article/store','Admin\ArticleController@article_store')->name('article_store');   // 文章-儲存
    Route::get('/article/edit/{id}','Admin\ArticleController@article_edit')->name('article_edit');  // 文章-編輯
    Route::post('/article/update/{id}','Admin\ArticleController@article_update')->name('article_update');   // 文章-更新
    Route::post('/article/delete/{id}','Admin\ArticleController@article_delete')->name('article_delete');   // 文章-刪除
    Route::post('/article/img_upload','Admin\ArticleController@article_summernote_img_upload')->name('article_img_upload');  // 文章-圖片上傳(Ajax)

    Route::get('/about/{id}','Admin\HomeController@about')->name('about');
    Route::post('/about/{id}','Admin\HomeController@about_post');
    Route::get('/english/{id}','Admin\HomeController@english')->name('english');
    Route::post('/english/{id}','Admin\HomeController@english_post');
});


