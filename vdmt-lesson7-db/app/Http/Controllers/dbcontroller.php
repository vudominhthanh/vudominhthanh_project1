<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbcontroller extends Controller
{
    public function datalist() {
        $khoas = DB::select('select * from khoa');
        return view('khoa.index',['khoas'=>$khoas]);    
    }
}
