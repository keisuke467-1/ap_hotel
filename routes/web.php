<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('register','RegisterController@index');
Route::post('register','RegisterController@post');