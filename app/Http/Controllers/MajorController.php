<?php

namespace App\Http\Controllers;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::all();
        $view = view('major.index');
        $view->with('majors', $majors);
        return $view;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = view('major.create');
        return $view;
    }
    public function doCreate(Request $request)
    {
        $form = $request->all();
        $newMajor = new \App\Models\Major();
        $newMajor->name = $form['name'];
        $newMajor->desc = $form['desc'];
        $newMajor->save();
        return redirect('/major/');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = \App\Models\Major::query();
        $query->where('id', $id);
        $major = $query->first();
        $view = view('major.edit');
        $view->with('major', $major);
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $major = \App\Models\Major::find($id);
        $form = $request->all();
        if ($form['id'] == $id) {
            $major->name = $form['name'];
            $major->desc = $form['desc'];
            $major->save();
        }
        return redirect('major/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $major = \App\Models\Major::find($id);
        $form = $request->all();
        if ($form['id'] == $id) {
            $major->delete();
        }
        return redirect('major/');
    }
}
