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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','JuegoController@index');
Route::get('/','JuegoController@index')->name('index');


Route::get('juego', function () {
    return view('new');
});

Route::get('/add_to_cart/{id}','JuegoController@addToCart')->name('addToCart.index');

Route::post('juego.store','JuegoController@store');
Route::resource('viewGames','JuegoController');
Route::get('/viewBuyGames/{id}','JuegoController@show')->name('juego.show');
Route::get('/viewCart','JuegoController@getCart')->name('cart.show');
Route::get('/viewCart/{id}','JuegoController@deleteGameCart')->name('deleteToCart.index');
Route::get('/payCart','JuegoController@PayCart')->name('payCart');

Route::get('/Pay1','PayController@pay')->name('Pay1');
//Route::get('/Profile','Controller@show')->name('Profile');
Route::get('/profile', 'ProfileController@show')->name('profile.show');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

//Route::get('/create', 'CommentsController@create')->name('comment.create');
Route::post('comment/store', 'CommentsController@store')->name('comment.store');

//Route::resource('comments', 'CommentsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
