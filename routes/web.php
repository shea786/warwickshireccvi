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
Route::get('/home',[
    'as' => 'home.index',
    'uses' => 'homeController@index'
]);

Route::get('contact.html',[
    'as' => 'contact.index',
    'uses' => 'contactController@index'
]);

//Profile Routes
Route::prefix('profile')->group(function (){
    //Create Profile Section
    Route::get('/create','myProfileController@create')->name('myProfile.create');
    Route::post('/create','myProfileController@store')->name('myProfile.store');
    //My Profile
    Route::get('/{username}','profileController@single')->name('profile.single');
    //my Profile Section
    Route::get('/','myProfileController@showMyProfileSection')->name('myProfile.showMyProfileSection');
});

//Fixtures Routes
Route::prefix('fixtures')->group(function (){
    //Main Fixtures Route
    Route::get('/','fixturesController@index')->name('fixtures.index');
});

//Admin Routes
Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\adminLoginController@showloginForm')->name('admin.login');
    Route::post('/login','Auth\adminLoginController@login')->name('admin.login.submit');
    
    //Match Routes
    Route::prefix('match')->group(function (){
        Route::get('/create','Admin\adminMatchController@create')->name('admin.match.create');
        Route::get('/','Admin\adminMatchController@index')->name('admin.match.index');
    });
    
    //Team Routes
    Route::prefix('teams')->group(function (){
        Route::get('/create','Admin\adminTeamsController@create')->name('admin.teams.create');
        Route::post('/create','Admin\adminTeamsController@store')->name('admin.teams.store');
        Route::get('/','Admin\adminTeamsController@index')->name('admin.teams.index');
    });
    
    Route::get('/','Admin\adminHomeController@index')->name('admin.home.index');
});