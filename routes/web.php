<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('one-to-one', 'OneToOneController@oneToOne');
Route::get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
Route::get('one-to-one-insert', 'OneToOneController@oneToOneInsert');


