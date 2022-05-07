<?php

use Illuminate\Support\Facades\Route;

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

// 不检测登陆的路由
Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@store');

    Route::get('/', 'IndexController@index');
});

// 测登陆的路由
Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'auth'],function(){
    // Route::get('/', 'IndexController@index');
});

// require __DIR__.'/auth.php';
