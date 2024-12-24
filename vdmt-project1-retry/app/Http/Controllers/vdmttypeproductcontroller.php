<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\vdmttypeproduct;
;

class vdmttypeproductcontroller extends Controller
{
    public function vdmtcreate() {
        $vdmttypeproducts = new vdmttypeproduct;
        return view('frontend.admin.vdmttypecreate',['vdmttypeproducts'=>$vdmttypeproducts]);
    }
    public function vdmtcreatesubmit(Request $request) {
        $vdmttypeproducts = new vdmttypeproduct;
        $vdmttypeproducts->vdmttypeproductid = $request->vdmttypeproductid;
        $vdmttypeproducts->vdmttypeproductname = $request->vdmttypeproductname;
        $vdmttypeproducts->vdmttypeproductstatus = $request->vdmttypeproductstatus;
        $vdmttypeproducts->save();
        return redirect()->route('admin.list-type-product');
    } 

    public function vdmtlist() {
        $vdmttypeproducts = vdmttypeproduct::all();
        return view('frontend.admin.vdmtlist',['vdmttypeproducts'=>$vdmttypeproducts]);
    }

    public function vdmttypeedit($id) {
        $vdmttypeproducts = vdmttypeproduct::find($id);
        return view('frontend.admin.vdmttypeedit',['vdmttypeproducts'=>$vdmttypeproducts]);
    }
    public function vdmttypeeditsubmit(Request $request) {
        $vdmttypeproducts = vdmttypeproduct::find($request->id);
        $vdmttypeproducts->vdmttypeproductid = $request->vdmttypeproductid;
        $vdmttypeproducts->vdmttypeproductname = $request->vdmttypeproductname;
        $vdmttypeproducts->vdmttypeproductstatus = $request->vdmttypeproductstatus;
        $vdmttypeproducts->save();
        return redirect()->route('admin.list-type-product');
    } 
    public function vdmtdelete($id)
    {
        $vdmttypeproducts = DB::delete('delete from vdmttypeproduct where id =?',[$id]);
        return redirect()->route('admin.list-type-product');
    }
}
