<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'api'], function () {
    Route::resource('order','OrderController');
    Route::resource('board','BoardController');
    Route::resource('card','CardController');
});

Route::get('/', function () {
    return view('welcome');
});
