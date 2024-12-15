<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modelcontrol extends Controller
{
    public function index() {
        $sv = qlsv::all();
        return view('sinhvien.index',['sv'=>$sv]);
    }
}
