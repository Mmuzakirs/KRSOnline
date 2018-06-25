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

Route::get('/tes', function() {
    return view('tes');
});

Route::get('/input', function() {
    return view('input');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('user.home');
Route::get('/home/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'AuthAdmin\LoginController@logoutAdmin')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');   
});

Route::group(['prefix' => 'dosen'], function() {
    Route::get('/', 'DosenController@index')->name('dosen.home');
    Route::get('/login', 'AuthDosen\LoginController@showLoginForm')->name('dosen.login');
    Route::post('/login', 'AuthDosen\LoginController@login')->name('dosen.login.submit');
    Route::get('/logout', 'AuthDosen\LoginController@logoutDosen')->name('dosen.logout');
    Route::get('/password/reset', 'AuthDosen\ForgotPasswordController@showLinkRequestForm')->name('dosen.password.request');
    Route::post('/password/email', 'AuthDosen\ForgotPasswordController@sendResetLinkEmail')->name('dosen.password.email');
    Route::get('/password/reset/{token}', 'AuthDosen\ResetPasswordController@showResetForm')->name('dosen.password.reset');
    Route::post('/password/reset', 'AuthDosen\ResetPasswordController@reset');
});


