<?php

Route::get('/profile', 'hanklobo\LaravelAuthProfile\AuthProfileController@viewCurrentUserProfile')->name('profile');

Route::post('/profile', 'hanklobo\LaravelAuthProfile\AuthProfileController@editCurrentUserProfile')->name('edit-profile');
