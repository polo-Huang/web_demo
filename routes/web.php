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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function(){
    Route::get('atelier/index', 'Atelier\HomeController@index');
    Route::get('atelier/users', 'Atelier\UserController@index');
    Route::get('atelier/user/details/{user_id}', 'Atelier\UserController@details');
    Route::post('atelier/user/eidtInfo', 'Atelier\UserController@eidtInfo');
    Route::post('atelier/user/eidtPicture', 'Atelier\UserController@eidtPicture');
});
