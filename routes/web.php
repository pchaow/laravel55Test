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

use \Illuminate\Http\Request;

Route::post("/major/{id}/product",function(Request $request,$id){
    $major = \App\Models\Major::find($id);
    $form = $request->all();
    $product = new \App\Models\Product();
    $product->name = $form['name'];
    $product->quantity = $form['quantity'];
    //first way
    //$product->major()->associate($major);
    //$product->save();
    //second way
    /* @var \App\Models\Major $major */
    $major->products()->save($product);
    return redirect("/major/$id/edit");
});

Route::get('/major/{id}/product/{pid}/delete',function ($mid,$pid){
   $product = \App\Models\Product::find($pid);
   $product->delete();
    return redirect("/major/$mid/edit");
});









