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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/publicación/{post}', 'PagesController@show')->name('index.show');


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@indexAdmin')->name('admin.index');

    Route::resource('/posts', 'PostController');
    Route::resource('/tags', 'TagController');
    
});

