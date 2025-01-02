<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vdmtbill;
use Illuminate\Support\Facades\DB; 

class vdmtbillcontroller extends Controller
{
    public function vdmtbilllist() {
        $vdmtbills = vdmtbill::all();
        return view('frontend.admin.bills.vdmtbilllist',['vdmtbills'=>$vdmtbills]);
    }
    public function vdmtbillcreate() {
        $vdmtbills = new vdmtbill;
        return view('frontend.admin.bills.vdmtbillcreate',['vdmtbills'=>$vdmtbills]);
    }
    public function vdmtbillcreatesubmit(Request $request) {
        $vdmtbills = new vdmtbill;
        $vdmtbills->vdmtbillid = $request->vdmtbillid;
        $vdmtbills->vdmtcusid = $request->vdmtcusid;
        $vdmtbills->vdmtcusname = $request->vdmtcusname;
        $vdmtbills->vmdtcusemail = $request->vmdtcusemail;
        $vdmtbills->vdmtcusnumber = $request->vdmtcusnumber;
        $vdmtbills->vdmtcusaddress = $request->vdmtcusaddress;
        $vdmtbills->vdmtbilltotal = $request->vdmtbilltotal;
        $vdmtbills->vdmtbillstatus = $request->vdmtbillstatus;
        $vdmtbills->save();
        return redirect()->route('admin.bill-list');
    } 
    public function vdmtbilledit($id) {
        $vdmtbills = vdmtbill::find($id);
        return view('frontend.admin.bills.vdmtbilledit',['vdmtbills'=>$vdmtbills]);
    }
    public function vdmtbilleditsubmit(Request $request) {
        $vdmtbills = vdmtbill::find($request->id);
        $vdmtbills->vdmtbillid = $request->vdmtbillid;
        $vdmtbills->vdmtcusid = $request->vdmtcusid;
        $vdmtbills->vdmtcusname = $request->vdmtcusname;
        $vdmtbills->vmdtcusemail = $request->vmdtcusemail;
        $vdmtbills->vdmtcusnumber = $request->vdmtcusnumber;
        $vdmtbills->vdmtcusaddress = $request->vdmtcusaddress;
        $vdmtbills->vdmtbilltotal = $request->vdmtbilltotal;
        $vdmtbills->vdmtbillstatus = $request->vdmtbillstatus;
        $vdmtbills->save();
        return redirect()->route('admin.bill-list');
    }
    public function vdmtbilldelete($id)
    {
        $vdmtbills = DB::delete('delete from vdmtbill where id =?',[$id]);
        return redirect()->route('admin.bill-list');
    }
}
