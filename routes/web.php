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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/{id}/edit', 'UserController@edit')->name('edit');

Route::resource('users', 'UserController');

Route::get('user', 'VideoGamesController@showuser')->name('edita');

Route::post('update', 'UserController@update')->name('update');

Route::get('userdestroy', 'UserController@destroy')->name('userdestroy');


Route::get('/contactanos', 'UserController@contactanos')->name('contactanos');

Route::get('/classicgames', 'UserController@classicgames')->name('classicgames');

Route::get('/infogame', 'UserController@infogame')->name('infogame');

Route::get('/game', 'UserController@game')->name('game');

Route::get('/perfil', 'UserController@perfil')->name('perfil');