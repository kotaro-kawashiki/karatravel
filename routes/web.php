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


Auth::routes();

Route::get('logout','Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController');
    Route::resource('items', 'ItemsController');
});

Route::get('show','ItemsController@show')->name('items.show');

Route::get('item/chart','ItemsController@chart');