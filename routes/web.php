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

Route::get('/major' ,"MajorController@index" );


Route::get('/major/create',"MajorController@create" );

Route::post('/major/create', "MajorController@doCreate");

Route::get('/major/{id}/edit', "MajorController@edit");


Route::post('/major/{id}/edit', "MajorController@update");


Route::post('/major/{id}/delete', "MajorController@destroy");


