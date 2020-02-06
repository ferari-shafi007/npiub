<?php

namespace App\Http\Controllers;

use App\Bach;
use Illuminate\Http\Request;

class bachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bach = Bach::all();
        return view ('bach.index')->with('baches', $bach);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bach = Bach::all();

        $this->validate($request, [
            'bach' => 'required',
            'department' => 'required',
            'url' => 'required'

        ]);

        // create a new bach
        $bach = new Bach;

        $bach->bach = $request->input('bach');
        $bach->department = $request->input('department');
        $bach->url = $request->input('url');
        $bach->session = $request->input('session');

        $bach->save();

        return redirect('/bach')->with('success', 'bach Created');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
