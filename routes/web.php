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
Route::get('/major/create', function () {
    $view = view('major.create');
    return $view;
});
Route::post('/major/create', function (\Illuminate\Http\Request $request) {
    $form = $request->all();
    $newMajor = new \App\Models\Major();
    $newMajor->name = $form['name'];
    $newMajor->desc = $form['desc'];
    $newMajor->save();
    return redirect('/major/');
});

Route::get('/major/{id}/edit', function ($id) {
    $query = \App\Models\Major::query();
    $query->where('id', $id);
    $major = $query->first();
    $view = view('major.edit');
    $view->with('major', $major);
    return $view;
});

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

