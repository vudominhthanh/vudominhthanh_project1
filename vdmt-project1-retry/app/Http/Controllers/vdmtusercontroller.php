<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Http\Middleware\adminmiddleware;

class vdmtusercontroller extends Controller
{
    public function vdmtlogin() {
        if (Auth::check()) {
            return redirect()->route('homeadmin');
        }
        return view('frontend.admin.login');
    }
    
    public function vdmtloginsubmit(Request $request) {
        $request->validate([
            'vdmtusername' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        $credentials = [
            'vdmtusername' => $request->input('vdmtusername'),
            'password' => $request->input('password'),
        ];
    
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->route('homeadmin');
        }
    
        return redirect()->back()->with('err', 'Wrong email or password');
    }
          
}
