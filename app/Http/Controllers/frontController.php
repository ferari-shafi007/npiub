<?php

namespace App\Http\Controllers;

use App\front;
use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('frontend');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'unauthorised Access';

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $front = front::all();
        $front = new front;

        // Handle File Upload
        if ($request->hasFile('logo')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('logo')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'logo.png';
        }

        $front->logo = $fileNameToStore;


        $front->save();
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
        $front = front::findOrFail($id);

        return view('frontendEdit.edit')->with('front', $front);
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
        $front = front::find(1);

        $front->head = $request->input('head');
        $front->tagLine = $request->input('tagLine');
        $front->aboutHeader = $request->input('aboutHeader');
        $front->aboutText = $request->input('aboutText');
        $front->address = $request->input('address');
        $front->city = $request->input('city');
        $front->phone = $request->input('phone');
        $front->email = $request->input('email');
        $front->map = $request->input('map');



        $front->save();

        return redirect('/front/1/edit')->with('success', 'Settings Updated');

    }
    public function updateLogo(Request $request, $id)
    {
        $front = front::find(1);

        // Handle File Upload
        if ($request->hasFile('logo')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('logo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('logo')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'logo.png';
        }

        $front->logo = $fileNameToStore;

        $front->save();

        return redirect('/front/1/edit')->with('success', 'Logo Updated');


    }

    public function aboutImg(Request $request, $id)
    {
        $front = front::find(1);

        // Handle File Upload
        if ($request->hasFile('aboutImg')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('aboutImg')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('aboutImg')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('aboutImg')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'aboutImg.png';
        }

        $front->aboutImg = $fileNameToStore;

        $front->save();

        return redirect('/front/1/edit')->with('success', 'aboutImg Updated');
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
