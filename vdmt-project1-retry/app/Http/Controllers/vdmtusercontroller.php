<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vdmtusercontroller extends Controller
{
    public function vdmtlogin() {
        return view('frontend.admin.login');
    }
    public function vdmtloginsubmit() {
        return view('frontend.admin.login');
    }
}
