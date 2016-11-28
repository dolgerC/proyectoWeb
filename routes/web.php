<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', 'aboutController@getContact');
Route::post('contact', 'aboutController@postContact');
Route::resource('bienes', 'bienesController');

Auth::routes();

Route::get('/home', 'HomeController@index');
