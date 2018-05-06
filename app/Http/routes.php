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



// Route::get('/hello', function () {
//     // return view('welcome');
// return '<h1>hello hello world</h1>';
// });

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@services');

// Route::get('/about', function () {
// return view('pages/about');
// });

// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'This is my' . $id . '  within tha name of  '.$name;
//     });