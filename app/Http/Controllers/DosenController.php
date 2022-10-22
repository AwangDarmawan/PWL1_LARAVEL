<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $data = ["ihsan","james","wak haji"] ;
        return view('dosen',['nama' => $data]);
    }
}
