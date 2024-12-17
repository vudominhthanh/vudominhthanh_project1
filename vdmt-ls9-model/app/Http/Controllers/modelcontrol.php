<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modelcontrol extends Controller
{
    public function index() {
        $sv = tblsv::all();
        return view('sinhvien.index',['sv'=>$sv]);
    }
}
