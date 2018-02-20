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

Route::get('/admin-profile','AdminProfileController@index')->name('admin-profile'); // Redirecting to Admin Profile Page


Route::post('admin-login-result','AdminLoginController@login')->name('admin-log'); // Calling Login function

Route::post('admin-edit-profile','AdminEditController@updateProfile')->name('admin-edit-profile'); // Calling Function to Update Profile

Route::get('/admin-edit-profile','AdminEditController@index')->name('admin-edit'); // Redirecting to Profile Edit page

Route::post('change-pic','EditPicController@changePic')->name('change-pic'); // To Change Admin profile pic

Route::post('/admin-profile-pic','EditPicController@index')->name('admin-change-pic'); // redirecting to admin edit page

Route::get('/admin-change-password','ChangePasswordController@index')->name('admin-password'); // Redirecting to Change Password Page

Route::post('admin-change-password','ChangePasswordController@changePassword')->name('admin-change-password'); // Calling Change Password function

Route::any('/admin/logout','AdminLoginController@logadminout')->name('admin-logout'); // Calling Logout function

Route::get('/admin','AdminController@index')->name('admin'); // Redrecting to Admin Home page

Route::get('/demo','DemoController@index')->name('demo'); // Redirecting to Demo page to get User data to admin home page.


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
