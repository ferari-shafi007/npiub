<?php

namespace App\Http\Controllers;

use App\Bach;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
        $notice = Notice::all();
        return view('notice.index')->with('notice', $notice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bach = Bach::all();
        $notice = Notice::all();

        $data = array(
            'bach' => $bach,
            'notice' => $notice
        );
        return view('notice.create')->with($data);
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
            'noticeHead' => 'required',
            'noticeBody' => 'required'
        ]);

        $newNotice = new Notice;

        $bachData = $request->input('bach');

        $newNotice->bach = $bachData;



        $newNotice->noticeHead = $request->input('noticeHead');
        $newNotice->noticeBody = $request->input('noticeBody');
        $newNotice->url1 = $request->input('url1');
        $newNotice->url2 = $request->input('url2');
        $newNotice->url3 = $request->input('url3');
        $newNotice->url4 = $request->input('url4');
        // $newNotice->bach = $bachIn;

        $newNotice->save();


       return redirect('/notice')->with('success', 'Notice Created');
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



    // facebook section
    public function bot(Request $request)
    {
        $data = $request->all();
        //get the user’s id
        $id            = $data["entry"][0]["messaging"][0]["sender"]["id"];
        $senderMessage = $data["entry"][0]["messaging"][0]['message'];
        if (!empty($senderMessage)) {
            $this->sendTextMessage($id, "Hi buddy");
        }
    }

    private function sendTextMessage($recipientId, $messageText)
    {
        $messageData = [
            "recipient" => [
                "id" => $recipientId,
            ],
            "message"   => [
                "text" => $messageText,
            ],
        ];
        $ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . env("PAGE_ACCESS_TOKEN"));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($messageData));
        curl_exec($ch);
        curl_close($ch);
    }







}
