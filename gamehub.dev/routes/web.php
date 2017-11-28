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
    return view('startpage');
});

Auth::routes();

Route::get('/usergames', 'UserGamesController@index');
Route::resource('usergames', 'UserGamesController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('comments/{steamId}', 'CommentsController@index');
Route::post('comments', 'CommentsController@store');
Route::post('comments/{commentId}/', 'CommentsController@update');

Auth::routes();
