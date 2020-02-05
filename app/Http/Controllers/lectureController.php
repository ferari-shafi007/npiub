<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;


class lectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecture = Lecture::all();
        return view('lecture.index')->with('lectures', $lecture);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecture.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lecture' => 'required',
            'url' => 'required',
            'subject' => 'required',
            'catagory' => 'required',
            'semester' => 'required',
        ]);

        $lecture = new Lecture;

        $lecture->lecture = $request->input('lecture');
        $lecture->catagory = $request->input('catagory');
        $lecture->url = $request->input('url');
        $lecture->subject = $request->input('subject');
        $lecture->semester = $request->input('semester');

            $lecture->save();
        // return Lecture::create([
        //     'lecture' => $request['lecture'],
        //     'catagory' => $request['catagory'],
        //     'url' => $request['url'],
        //     'subject' => $request['subject'],
        //     'semester' => $request['semester'],

        // ]);

        return redirect('/lecture')->with('success', 'lecture Created');
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
