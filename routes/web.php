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

Route::get('/major', function () {
    $majors = App\Models\Major::all();
    $view = view('major.index');
    $view->with('majors', $majors);
    return $view;

});


Route::get('/major/create',"MajorController@create" );
Route::post('/major/create', "MajorController@doCreate");

Route::get('/major/{id}/edit', "MajorController@edit");

Route::post('/major/{id}/edit', function (\Illuminate\Http\Request $request, $id) {
    $major = \App\Models\Major::find($id);
    $form = $request->all();
    if ($form['id'] == $id) {
        $major->name = $form['name'];
        $major->desc = $form['desc'];
        $major->save();
    }
    return redirect('major/');
});

Route::post('/major/{id}/delete', function (\Illuminate\Http\Request $request, $id) {
    $major = \App\Models\Major::find($id);
    $form = $request->all();
    if ($form['id'] == $id) {
        $major->delete();
    }
    return redirect('major/');
});

