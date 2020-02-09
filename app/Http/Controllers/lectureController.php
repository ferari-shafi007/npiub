<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\semester;
use App\subject;

use Illuminate\Http\Request;


class lectureController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = subject::all();
        $lecture = Lecture::all();
        $semester = semester::all();
        $data = array(
            'subject'=>$subject,
            'lecture'=>$lecture,
            'semester'=>$semester
        );
        // return view('lecture.index')->with('lectures', $lecture);
        return view('lecture.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subject = subject::all();
        $lecture = Lecture::all();
        $semester = semester::all();

        $data = array(
            'subject' => $subject,
            'lecture' => $lecture,
            'semester' => $semester
        );
        return view('lecture.create')->with($data);

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
