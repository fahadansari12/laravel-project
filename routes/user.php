<?php

//USER PROFILE

Route::get('user-profile','UserProfileController@index')->name('user-profile');

Route::get('/user-report','UserProfileController@report')->name('user-report');

Route::post('submit-report','UserProfileController@submitReport')->name('submit-report');


?>