<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\message;
use App\Notice;
use App\student;
use App\subject;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = User::all();
        $student = student::all();
        $notice = Notice::all();
        $lecture = Lecture::all();
        $subject = subject::all();
        $message = message::all();

        $data = array(
            'user' => $user,
            'student' => $student,
            'notice' => $notice,
            'lecture' => $lecture,
            'subject' => $subject,
            'message' => $message
        );

        return view('dashboard')->with($data);
    }
}
