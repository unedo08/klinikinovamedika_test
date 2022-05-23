<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index(){
        $obat = Obat::orderBy('created_at','desc')
        ->get();

        return view('admin.obat.index',['obat'=>$obat]);
    }

    public function viewAddObat(){
        return view('admin.obat.add');
    }

    public function store(Request $request){
         $this->validate($request,[
            'nama'=>'required',
            'jumlah'=>'required',
            'harga'=>'required',
        ]);
        
        Obat::create([
            'nama'=> $request->nama,
            'jumlah'=>$request->jumlah,
            'harga'=>$request->harga

        ]);
        return redirect('/admin/obat');
    }

    public function edit($id)
    {

	    $obat = Obat::where('id',$id)->get();
	    return view('admin.obat.edit',['obat' => $obat]);
 
    }
    public function update(Request $request,){
        Obat::where('id',$request->id)->update([
            'nama'=> $request->nama,
            'jumlah'=>$request->jumlah,
            'harga'=>$request->harga
        ]);
        return redirect('/admin/obat');
    }
    public function delete($id)
    {

	    $obat = Obat::where('id',$id)->delete();
	    return redirect('/admin/obat');
 
    }
}
