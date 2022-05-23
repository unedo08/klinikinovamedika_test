<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
use Hash;

class UserController extends Controller
{

    // For Pegawai
    public function index(){
        $user = User::orderBy('created_at','desc')
        ->get();

        return view('admin.user.index',['user'=>$user]);
    }

    public function viewAddUser(){
        return view('admin.user.add');
    }

    public function viewLogin(){
        return view('login.index');
    }

    public function postlogin(Request $request)
    { 
        if(Auth::attempt($request->only('email', 'password'))){
            $user = DB::table('users')->where('email', $request->email)->first();
            if ($user->role == "admin") {
                return redirect('/admin');
            }else {
                return redirect('/login');
            }
        }
        return redirect('/');    
    }
    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'username'=>'required',
           'email'=>'required',
           'password'=>'required',
       ]);
    //    dd($request->role);
       User::create([
           'name'=> $request->name,
           'username'=>$request->username,
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
           'role'=>$request->role,

       ]);
       return redirect('/admin/user');
    }
    public function edit($id)
    {

	    $user = User::where('id',$id)->get();
	    return view('admin.user.edit',['user' => $user]);
 
    }
    public function update(Request $request,){
        User::where('id',$request->id)->update([
            'name'=> $request->name,
           'username'=>$request->username,
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
           'role'=>$request->role,
        ]);
        return redirect('/admin/user');
    }
    public function delete($id)
    {

	    $pegawai = User::where('id',$id)->delete();
	    return redirect('/admin/user');
 
    }
}

