<?php

// ADMIN PROFILE
Route::get('/admin-profile','AdminProfileController@index')->name('admin-profile'); // Redirecting to Admin Profile Page

Route::post('admin-edit-profile','AdminEditController@updateProfile')->name('admin-edit-profile'); // Calling Function to Update Profile

Route::get('/admin-edit-profile','AdminEditController@index')->name('admin-edit'); // Redirecting to Profile Edit page

Route::post('change-pic','EditPicController@changePic')->name('change-pic'); // To Change Admin profile pic

Route::post('/admin-profile-pic','EditPicController@index')->name('admin-change-pic'); // redirecting to admin edit page

Route::get('/admin-change-password','ChangePasswordController@index')->name('admin-password'); // Redirecting to Change Password Page

Route::post('admin-change-password','ChangePasswordController@changePassword')->name('admin-change-password'); // Calling Change Password function

Route::get('/admin','AdminController@index')->name('admin'); // Redrecting to Admin Home page

Route::get('/demo','DemoController@index')->name('demo'); // Redirecting to Demo page to get User data to admin home page.

?>