<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class dbcontroller extends Controller
{
    public function datalist() {
        $khoas = DB::select('select * from khoa');
        return view('khoa.index',['khoas'=>$khoas]);    
    }

    public function detail($makhoa) {
        $khoas = DB::select('Select * from khoa where makhoa=?', [$makhoa])[0];
        return view('khoa.detail',['khoas'=>$khoas]);
    }

    public function create() {
        return view('khoa.create');
    }
    public function createsubmit(Request $request) {
        DB::insert('insert into khoa(makhoa,tenkhoa) values(?,?)',[$request->makhoa,$request->tenkhoa]);
        return redirect('/khoa');
    }
}
