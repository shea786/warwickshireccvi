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

Route::get('/',[
    'as' => 'default.index',
    'uses' => 'homeController@index'
]);
Route::get('index.html',[
    'as' => 'home.index',
    'uses' => 'homeController@index'
]);

Route::get('contact.html',[
    'as' => 'contact.index',
    'uses' => 'contactController@index'
]);


//Admin Routes
Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\adminLoginController@showloginForm')->name('admin.login');
    Route::post('/login','Auth\adminLoginController@login')->name('admin.login.submit');
    Route::get('/','adminHomeController@index')->name('admin.home.index');
});