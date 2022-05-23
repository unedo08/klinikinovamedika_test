<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            // dd($user->role);
            if(strcmp($user->role,'admin')==0){
                return redirect('/admin');
            }
            else if(strcmp($user->role,'pasien')==0){
                return redirect('/portalPasien');
            }
            else{
                return view('login');
            }
            
        } else {
            return view('login');
        }

        return redirect('/');
    }

    public function register1(){
        return view('register.index');
    }

    public function store(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'username'=>'required',
           'email'=>'required',
           'password'=>'required',
       ]);
    //    dd($request);
       User::create([
           'name'=> $request->name,
           'username'=>$request->username,
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
           'role'=>'pasien',

       ]);
       return redirect('/login');
   }

   public function logout(){
       Auth::logout();
       return redirect('/login');
   }
}
