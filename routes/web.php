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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'Admin\HomeController@index')->name('home');

Route::get('/users', 'Admin\HomeController@users')->name('users');

Route::prefix('profile')->group(function () {

    Route::get('/', 'Admin\HomeController@profile')->name('profile');
    Route::put('/{id}', 'Admin\UserController@update');

});

Route::prefix('change-password')->group(function () {

    Route::get('/', 'Admin\HomeController@changePassword')->name('change-password');
    Route::put('/{id}', 'Admin\UserController@changePassword');

});

Route::get('/modules', 'Admin\ModuleController@index')->name('index-modules');


