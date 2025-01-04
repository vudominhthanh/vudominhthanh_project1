<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vdmtcustomer;
use Illuminate\Support\Facades\DB;  
use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Auth;  

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

    //login and sign
    // public function __construct() { 
    //     $this->middleware('auth.customer')->only('vdmtlogin','vdmtloginsubmit');
    // }
    public function vdmtlogin() 
    {
        return view("homes.login");
    }
    public function vdmtloginsubmit(Request $request) {
        $request->validate([ 
            'vdmtcusemail' => 'required', 
            'vdmtcuspassword' => 'required|min:6',  
        ]);
        // $credentials = $request->only("vdmtcusemail","vdmtcuspassword");
        $credentials = [ 
            'vdmtcusemail' => $request->vdmtcusemail, 
            'password' => $request->vdmtcuspassword ,
        ];
        if(Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('cuslogin'))->with("error",'Login failed');
    }

    public function vdmtregister() 
    {
        return view("homes.register");
    }
    public function vdmtregistersubmit(Request $request) {
        $request->validate([
            'vdmtcusid' => 'required|max:12', 
            'vdmtcusname' => 'required', 
            'vdmtcusemail' => 'required', 
            'vdmtcuspassword' => 'required|min:6', 
        ]);

        $user = new vdmtcustomer();
        $user->vdmtcusid = $request->vdmtcusid;
        $user->vdmtcusname = $request->vdmtcusname;
        $user->vdmtcusemail = $request->vdmtcusemail;
        $user->vdmtcuspassword = Hash::make($request->vdmtcuspassword);
        $user->vdmtcusnumber = $request->vdmtcusnumber;
        $user->vdmtcusaddress = $request->vdmtcusaddress;
        if($user->save()) {
            return redirect(route("cuslogin"))->with('Success','User create success');
        }
        return redirect(route('cusregister'))->with("error","Failed");
    }
}
