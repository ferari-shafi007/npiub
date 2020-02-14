<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;

class messageController extends Controller
{

    public function store(Request $request)
    {
        $messege = message::all();
        $messege = new message;

        $messege->name = $request->input('name');
        $messege->email = $request->input('email');
        $messege->subject = $request->input('subject');
        $messege->msgbody = $request->input('message');

        $messege->save();

        return redirect('/');
    }



    public function destroy($id)
    {
        $message = message::findOrFail($id);

        $message->delete();
        return redirect('/home')->with('success', 'message Removed');
    }
}
