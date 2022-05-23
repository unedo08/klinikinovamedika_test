<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index(){
        return view('registration.create');
    }

    public function viewPasien(){
        $pasien = Pasien::orderBy('created_at','asc')
        ->get();

        return view('admin.user.index',['user'=>$pasien]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'nama'=>'required',
            'nik'=>'required|min:16|max:16',
            'password'=>'required|min:5|max:255',
            'tl'=>'required',
            'umur'=>'required',
            'nama_dokter'=>'required'
        ]);
        
        Pasien::create($validateData);
        return redirect('admin/user');
    }

    public function edit($id)
    {

	    $pegawai = Pasien::where('id',$id)->get();
	    return view('admin.user.edit',['pegawai' => $pegawai]);
 
    }
    public function update(Request $request,){
        Pasien::where('id',$request->id)->update([
            'nama'=> $request->nama,
            'nik'=>$request->nik,
            'password'=>$request->password,
            'tl'=>$request->tl,            
            'umur'=>$request->umur,
            'nama_dokter'=>$request->nama_dokter
        ]);
        return redirect('/admin/user');
    }
    public function delete($id)
    {

	    $pegawai = Pasien::where('id',$id)->delete();
	    return redirect('/admin/pegawai');
 
    }
}
