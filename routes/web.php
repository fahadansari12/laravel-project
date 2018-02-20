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


Route::any('/admin-store','AdminUserController@store')->name('admin-reg');

Route::get('/admin-registration','AdminUserController@index')->name('admin-registration');

Route::get('/admin-login','AdminLoginController@index')->name('admin-login');

Route::get('/admin-profile','AdminProfileController@index')->name('admin-profile');



/* Route::post('admin-login-result',function() {
    echo 'its working!';
})->name('admin-log');  */

Route::post('admin-login-result','AdminLoginController@login')->name('admin-log');

Route::post('admin-edit-profile','AdminEditController@updateProfile')->name('admin-edit-profile');
Route::get('/admin-edit-profile','AdminEditController@index')->name('admin-edit');
//Route::post('admin-profile','')->name('admin-change-password');

Route::get('/admin-change-password','ChangePasswordController@index')->name('admin-password');
Route::post('admin-change-password','ChangePasswordController@changePassword')->name('admin-change-password');
/*Route::post('admin-profile-update',function() {
    echo 'updated!';
})->name('admin-edit-profile');*/


Route::any('/admin/logout','AdminLoginController@logadminout')->name('admin-logout');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/demo','DemoController@index')->name('demo');

//Route::get('/admin-register','AdminUserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
