<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('register','RegisterController@index');
Route::post('register','RegisterController@check');

Route::post('register/clear','RegisterController@clear');

Route::get('hoteluser','HoteluserController@index');

Route::get('hoteluser/add','HoteluserController@add');

Route::post('hoteluser/add','HoteluserController@create');