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

Route::get('/', function () {
    return view('welcome');
});

route::resource('hackerrank','hackerrankController');

Route::get('/capayAplicacion', function () {
    return view('capayAplicacion');
});

Route::get('/coderefa', function () {
    return view('coderefa');
});

Route::get('/noticias', function () {
    return view('noticias');
});
//