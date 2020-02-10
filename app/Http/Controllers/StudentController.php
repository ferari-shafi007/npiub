<?php

namespace App\Http\Controllers;

use App\Bach;
use App\student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
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
        $user = User::all();
        $student = student::all();
        $bach = Bach::all();

        $data = array(
            'student' => $student,
            'bach' => $bach,
            'user'=> $user
        );
        return view('student.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = student::all();
        $bach = Bach::all();

        $data = array(
            'student' => $student,
            'bach' => $bach
        );
        return view('student.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // firstName
        // lastName
        // institute
        // bach
        // email
        // phone
        // stdId
        // gender
        // skill1
        // skill2
        // job
        // city
        // state
        // zip
        // status
        // url
        // img


        $student = student::all();

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'stdId' => 'required'

        ]);

        // Handle File Upload
        if ($request->hasFile('img')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('img')->storeAs('public/student_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'avatar.jpg';
        }

        // create a new bach
        $student = new student;

        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->institute = $request->input('institute');
        $student->bach = $request->input('bach');
        $student->department = $request->input('department');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->stdId = $request->input('stdId');
        $student->gender = $request->input('gender');
        $student->skill1 = $request->input('skill1');
        $student->skill2 = $request->input('skill2');
        $student->job = $request->input('occupation');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->zip = $request->input('zip');
        $student->status = $request->input('status');
        $student->url = $request->input('url');
        $student->img = $fileNameToStore;


        $student->save();

        return redirect('/student')->with('success', 'Student Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::findOrFail($id);
        $bach = Bach::all();

        $data = array(
            'student' => $student,
            'bach' => $bach
        );
        return view('student.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::findOrFail($id);
        $bach = Bach::all();

        $data = array(
            'student' => $student,
            'bach' => $bach
        );
        return view('student.edit')->with($data);
        // return 'edit page ' . $student->firstName;
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
        // update student by id
        $student = student::findOrFail($id);

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'stdId' => 'required'

        ]);

        // Handle File Upload
        if ($request->hasFile('img')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('img')->storeAs('public/student_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'avatar.jpg';
        }



        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->institute = $request->input('institute');
        $student->bach = $request->input('bach');
        $student->department = $request->input('department');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->stdId = $request->input('stdId');
        $student->gender = $request->input('gender');
        $student->skill1 = $request->input('skill1');
        $student->skill2 = $request->input('skill2');
        $student->job = $request->input('occupation');
        $student->city = $request->input('city');
        $student->state = $request->input('state');
        $student->zip = $request->input('zip');
        $student->status = $request->input('status');
        $student->url = $request->input('url');
        $student->img = $fileNameToStore;


        $student->save();

        return redirect('/student')->with('success', 'Student - '. $student->firstName . ' '. $student->lastName.' Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findOrFail($id);


        if ($student->img != 'avatar.jpg') {
            // Delete Image
            Storage::delete('public/student_images/' . $student->img);
        }

        $student->delete();
        return redirect('/student')->with('success', 'student Removed');
    }
}
