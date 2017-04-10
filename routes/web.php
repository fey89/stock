<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('foo', function () {
    return view('foo');
});*/

Route::get('foo', 'FooController@index');

Route::post('foo', 'FooController@store');

/*
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});

Route::get('1', function() { return 'Je suis la page 1 !'; });

Route::get('2', function() { return 'Je suis la page 2 !'; });

Route::get('3', function() { return 'Je suis la page 3 !'; });

*/