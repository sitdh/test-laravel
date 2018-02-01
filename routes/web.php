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

Route::get('/sitdh', 'BookController@index');
Route::post('/sitdh', 'BookController@store');
Route::get('/sitdh/{book}', 'BookController@view');
Route::put('/sitdh/{id}/edit', 'BookController@update');
Route::get('/sitdh/{id}/delete', 'BookController@destroy');