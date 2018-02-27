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


Route::any('/admin-store','AdminUserController@store')->name('admin-reg'); // Calling Registration function

Route::get('/admin-registration','AdminUserController@index')->name('admin-registration'); // Redirecting to Registration page

Route::get('/admin-login','AdminLoginController@index')->name('admin-login'); // Redirecting to login page

Route::post('admin-login-result','AdminLoginController@login')->name('admin-log'); // Calling Login function


//ADMIN LOGOUT
Route::any('/admin/logout','AdminLoginController@logadminout')->name('admin-logout'); // Calling Logout function


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



