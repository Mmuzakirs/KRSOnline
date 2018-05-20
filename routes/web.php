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

Route::group([ 'middleware' => 'auth' ], function() {

    Route::get('/', function () {
        return view('dashboard') ;
    }) ;

    Route::get('dashboard', function () {
        return view('dashboard') ;
    }) ;

    Route::resource('mahasiswas', 'MahasiswaController');

    Route::get('users', 'UsersController@index')->name('user.index') ;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
