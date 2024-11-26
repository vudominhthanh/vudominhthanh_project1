<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VdmtController extends Controller
{
    public function display(){
        return "<h1> Name route controller </h1>";
    }

    public function show() {
        return redirect()->route('display.profile');
    }
}

