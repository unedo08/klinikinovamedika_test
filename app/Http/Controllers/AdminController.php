<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
