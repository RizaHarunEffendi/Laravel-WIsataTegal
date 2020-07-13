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

// Route::get('/', function () {
//      return view('welcome');
// });

//user
Route::get('/', 'PenggunaController@index');
Route::get('/deskripsi/{detail}', 'PenggunaController@show')->name('detail');
Route::get('/destination', 'PenggunaController@destination')->name('destination');
Route::get('/about', 'PenggunaController@about')->name('about');


Auth::routes(['verify' => true]);

//admin
Route::group(['middleware' => ['auth']], function () {
     Route::resource('dashboard', 'AdminController');
     Route::resource('user', 'UserController');
     Route::resource('wisata', 'WisataController');
     Route::resource('wilayah', 'WilayahController');

     Route::get('password', 'PasswordController@edit')
     ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
     ->name('user.password.update');

});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('auth/{provider}','Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\SocialiteController@handleProviderCallback');


