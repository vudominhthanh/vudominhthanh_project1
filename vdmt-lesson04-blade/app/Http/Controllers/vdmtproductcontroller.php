<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vdmtproductcontroller extends Controller
{
    public function index() 
    {
        $fruits = array("ap","or","Pi","Ma");
        return view('testview',["fruits"=>$fruits]);
    }
}
