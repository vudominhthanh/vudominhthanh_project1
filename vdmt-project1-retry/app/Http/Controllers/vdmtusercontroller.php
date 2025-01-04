<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class vdmtusercontroller extends Controller
{
    public function vdmtlogin() 
    {
        return view("frontend.admin.login");
    }
    public function vdmtloginsubmit(Request $request) {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credentials = $request->only("email","password");
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('homeadmin'));
        }
        return redirect(route('adminlogin'))->with("error",'login failed');
    }

    public function register() 
    {
        return view("auth.register");
    }
    public function registerpost(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save()) {
            return redirect(route("login"))->with('duccess','User');
        }
        return redirect(route('register'))->with("error","Failed");
    }
    public function vdmtlogout(Request $request) {
         Auth::guard('web')->logout(); 
         $request->session()->invalidate(); 
         $request->session()->regenerateToken(); 
         return redirect()->intended(route('adminlogin')); 
    }
}

