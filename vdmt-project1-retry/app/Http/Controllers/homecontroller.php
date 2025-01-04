<?php

namespace App\Http\Controllers;

use App\Models\vdmtproduct;
use App\Models\vdmttypeproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class homecontroller extends Controller
{
    public function home() {
        $vdmtproducts = vdmtproduct::all();
        $vdmttypeproducts = vdmttypeproduct::all();
        return view('homes.home',['vdmtproducts'=> $vdmtproducts,'vdmttypeproducts'=> $vdmttypeproducts]);
    }
    public function hometype($vdmttypeproductid) {
        $vdmttypeproducts = vdmttypeproduct::all();
        $vdmtproducts = vdmtproduct::where('vdmttypeproductid', $vdmttypeproductid)->get(); 
        return view('homes.home',['vdmtproducts'=> $vdmtproducts,'vdmttypeproducts'=> $vdmttypeproducts]);
    }
    public function homedetail($id) {
        $vdmtproducts = vdmtproduct::findOrFail($id);
        $vdmttypeproducts = vdmttypeproduct::all();
        return view('homes.productdetail',['vdmttypeproducts'=> $vdmttypeproducts,'vdmtproducts'=> $vdmtproducts]);
    }
    
}
