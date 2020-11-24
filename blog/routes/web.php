<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/updated-activity', 'TelegramController@updatedActivity');


Route::get('/', 'TelegramController@sendMessage');
Route::post('/send-message', 'TelegramController@storeMessage');
Route::post('/store-photo', 'TelegramController@storePhoto');
