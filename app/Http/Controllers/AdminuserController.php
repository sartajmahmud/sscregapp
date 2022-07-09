<?php

namespace App\Http\Controllers;

use App\Models\Adminuser;
use Illuminate\Http\Request;

class AdminuserController extends Controller
{


    public function loginview()
    {
        if(session()->has('user')){
            redirect('admin/dashboard');
        }
        return view('admin/login');

    }

    public function login(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'password'=> 'required',
            ]);
        $admin = Adminuser::whereIn('username',[$request->input('name')])->get();
        if($admin != null){
            $request->session()->put('user',$request->input('name'));
            return redirect('admin/dashboard');
        }else{
            echo "could not find user";
        }
        //return $admin;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.adminuser');
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
