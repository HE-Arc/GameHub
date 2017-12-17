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

Route::post('/search', 'GamesController@search')->name('route.search');

Route::get('/deletegame/{id}', 'GamesUserController@deleteGame')->name('route.deletegame');
Route::get('/addtowishlist/{id}', 'GamesUserController@insertWish')->name('route.addtowishlist');
Route::post('/addtoplayedlist', 'GamesUserController@insertPlayed')->name('route.addtoplayedlist');
Route::get('/infogame/{steam_id}', 'GameInfoControler@index')->name('route.infogame');
Route::get('/', 'StartPageControler@index')->name('route.startpage');

Route::get('/wishlist', 'GamesUserController@getWishList')->name('route.wishlist');
Route::get('/playedlist', 'GamesUserController@getPlayedList')->name('route.playedlist');
Route::get('/gamesuser', 'GamesUserController@index');
Route::resource('gamesuser', 'GamesUserController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addgame/{steam_id}', 'GamesUserController@insertGame')->name('addGame');

Route::get('/game/{game}', 'CommentsController@index');
Route::post('/comments', 'CommentsController@store');
Route::get('/comments/vote/{comment}', 'CommentsController@update');

Route::get('auth/steam', 'Auth\AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'Auth\AuthController@handle')->name('auth.steam.handle');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();
