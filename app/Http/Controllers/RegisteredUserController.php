<?php

namespace App\Http\Controllers;

use App\Models\Registered_user;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{

    public function adminindex(){
        return view('admin.registereduser');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registered_users = Registered_user::all();

        return view('registereduser', ["registered_users" => $registered_users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=> 'required',
            'phone'=>   'required',
            'email'=>   'required',
            'school_name'=>   'required',
            'home_district'=>   'required',
            'spouse'=>   'required',
            'spouse_phone'=>   'required',
            'driver'=>   'required',
            'present_address'=>   'required',
            'permanent_address'=>   'required',
            'blood_group'=>   'required',
            'profession'=>   'required',
            'prof_description'=>   'required',
            'code'=>   'required',
            'payment_received_by'=>   'required',
            'image_id'=>   'required',
            //'uploadfile'=>   'required',
        ]);


        $registeredUser = new Registered_user();
        $registeredUser->name = $request->input('name');
        $registeredUser->phone = $request->input('phone');
        $registeredUser->email = $request->input('email');
        $registeredUser->school = $request->input('school_name');
        $registeredUser->home_district = $request->input('home_district');
        $registeredUser->spouse = $request->input('spouse');
        $registeredUser->spouse_phone = $request->input('spouse_phone');
        $registeredUser->driver = $request->input('driver');
        $registeredUser->present_add = $request->input('present_address');
        $registeredUser->permanent_add = $request->input('permanent_address');
        $registeredUser->blood_group = $request->input('blood_group');
        $registeredUser->profession = $request->input('profession');
        $registeredUser->prof_desc = $request->input('prof_description');
        $registeredUser->code_id = $request->input('code');
        $registeredUser->payment_received_by = $request->input('payment_received_by');
        $registeredUser->media_id = $request->input('image_id');
       // $registeredUser->uploadfile = $request->input('uploadfile');
        $registeredUser->save();

        return $registeredUser;

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
