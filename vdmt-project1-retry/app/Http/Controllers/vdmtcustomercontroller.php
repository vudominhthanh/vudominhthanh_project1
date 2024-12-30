<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vdmtcustomer;
use Illuminate\Support\Facades\DB;  

class vdmtcustomercontroller extends Controller
{
    public function vdmtcustomerlist() {
        $vdmtcustomers = vdmtcustomer::all();
        return view('frontend.admin.customers.vdmtlistcustomer',['vdmtcustomers'=>$vdmtcustomers]);
    }
    public function vdmtcustomercreate() {
        $vdmtcustomers = new vdmtcustomer;
        return view('frontend.admin.customers.create',['vdmtcustomers'=>$vdmtcustomers]);
    }
    public function vdmtcustomercreatesubmit(Request $request) {
        $vdmtcustomers = new vdmtcustomer;
        $vdmtcustomers->vdmtcusid = $request->vdmtcusid;
        $vdmtcustomers->vdmtcusname = $request->vdmtcusname;
        $vdmtcustomers->vdmtcusemail = $request->vdmtcusemail;
        $vdmtcustomers->vdmtcuspassword = $request->vdmtcuspassword;
        $vdmtcustomers->vdmtcusnumber = $request->vdmtcusnumber;
        $vdmtcustomers->vdmtcusaddress = $request->vdmtcusaddress;
        $vdmtcustomers->vdmtcusstatus = $request->vdmtcusstatus;
        $vdmtcustomers->save();
        return redirect()->route('admin.list-customer');
    } 
    public function vdmtcustomeredit($id) {
        $vdmtcustomers = vdmtcustomer::find($id);
        return view('frontend.admin.customers.edit',['vdmtcustomers'=>$vdmtcustomers]);
    }
    public function vdmtcustomereditsubmit(Request $request) {
        $vdmtcustomers = vdmtcustomer::find($request->id);
        $vdmtcustomers->vdmtcusid = $request->vdmtcusid;
        $vdmtcustomers->vdmtcusname = $request->vdmtcusname;
        $vdmtcustomers->vdmtcusemail = $request->vdmtcusemail;
        $vdmtcustomers->vdmtcuspassword = $request->vdmtcuspassword;
        $vdmtcustomers->vdmtcusnumber = $request->vdmtcusnumber;
        $vdmtcustomers->vdmtcusaddress = $request->vdmtcusaddress;
        $vdmtcustomers->vdmtcusstatus = $request->vdmtcusstatus;
        $vdmtcustomers->save();
        return redirect()->route('admin.list-customer');
    }
    public function vdmtcustomerdelete($id)
    {
        $vdmtcustomers = DB::delete('delete from vdmtcustomer where id =?',[$id]);
        return redirect()->route('admin.list-customer');
    }
}
