<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function vdmtlogin() 
    {
        return view("auth.login");
    }
    public function loginpost(Request $request) {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credentials = $request->only("email","password");
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error",'login failed');
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
}
