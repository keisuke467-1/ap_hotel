<?php

use App\Http\Controllers\RoomgroupController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('register','RegisterController@index');
// Route::post('register','RegisterController@check');

Route::post('hoteluser/create','HoteluserController@create');

Route::get('hoteluser','HoteluserController@showindex');

Route::get('hoteluser/add','HoteluserController@add');

Route::post('hoteluser/add','HoteluserController@check');

Route::get('roomsearch','RoomgroupController@index');
