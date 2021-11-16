<?php

use App\Http\Controllers\RoomgroupController;

Route::get('/', function () {
    return view('welcome');
});

// getはデータを取得するとき　postはデータを送る時

Route::post('hoteluser/create','HoteluserController@create');//③

Route::get('hoteluser','HoteluserController@showindex');

Route::get('hoteluser/add','HoteluserController@add');//①

Route::post('hoteluser/add','HoteluserController@check');//②

Route::get('roomsearch','RoomgroupController@index');

Route::get('alluser','HoteluserController@allusers');

Route::get('reserve','ReserveController@index');

Route::get('room','RoomController@index');
