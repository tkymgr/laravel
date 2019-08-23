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


Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/regist', 'HomeController@regist')->name('home');
    Route::resources([
        'users' => 'UserController',
        'groups' => 'GroupController',
    ]);
});
