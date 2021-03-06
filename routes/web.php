<?php

use App\Http\Controllers\ReserveController;
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
//バリデーション用のpost
Route::post('roomsearch','RoomgroupController@index');

Route::get('alluser','HoteluserController@allusers');

Route::get('reserve','ReserveController@index');

Route::get('room','RoomController@index');
Route::post('room','RoomController@index');

Route::post('room_select','RoomController@room_select');
Route::get('room_select','RoomController@room_select');

Route::get('hoteluser/login','HoteluserController@login');

Route::post('hoteluser/login_check','HoteluserController@login_check');
Route::get('hoteluser/login_check','HoteluserController@login_check')->name('login_check');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reserve/clear','ReserveController@clear');