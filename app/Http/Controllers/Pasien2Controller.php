<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pasien2Controller extends Controller
{
    public function index(){
        return view('pasien.index');
    }
}
