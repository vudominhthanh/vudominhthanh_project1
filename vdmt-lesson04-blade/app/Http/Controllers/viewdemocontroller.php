<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class viewdemocontroller extends Controller
{
    public function view4() 
    {
        return view('view4')
                ->with('name','Minhthanh')
                ->with('company','ntu');
    }
    public function view5()
    {
        $text1 = "Welcome to Visual studio";
        $text2 = array(
            "name"=>"Thanh nhe",
            "email"=>"gmail.com",
            "Phone"=>"1234567890"
        );
        if(View::exists('view5')) {
            return view('view5',compact('text1','text2'));
        }else {
            return "View5 not exists";
        }
    }
}
