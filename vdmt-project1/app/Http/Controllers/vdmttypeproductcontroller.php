<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\vdmtmanage;
;

class vdmttypeproductcontroller extends Controller
{
    public function typelist() {
        $vdmttypeproducts = vdmtmanage::all();
        return view('vdmttype.vdmttypeproduct',['vdmttypeproducts'=> $vdmttypeproducts]);
    }
    public function typeedit($id) {
        $vdmttypeproduct = vdmtmanage::find($id);
        return view('vdmttype.typeproductedit',['vdmttypeproduct' => $vdmttypeproduct]);
    }
    public function typeeditsubmit(Request $request) {
        $vdmttypeproduct = vdmtmanage::find($request->id);
        $vdmttypeproduct->vdmttypeproductid = $request->input('vdmttypeproductid');
        $vdmttypeproduct->vdmttypeproductname = $request->input('vdmttypeproductname');
        $vdmttypeproduct->vdmttypeproductstatus = $request->vdmttypeproductstatus;
        $vdmttypeproduct->save();
        return redirect()->route('typelists');
    }
    public function delete($id)
    {
        $vdmttypeproduct = DB::delete('delete from vdmt_typeproducts where id =?',[$id]);
        return redirect()->route('typelists');
    }
}