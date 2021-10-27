<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('register','RegisterController');
Route::post('register','RegisterController');