<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accountcontroller extends Controller
{
    public function index() 
    {
        return "<h1> Account controller; action index; return string";
    }
    public function create()
    {
        return  view('account-create');
    }
    public function showdata() 
    {
        $data = array('123456789','devmaster');
        return view('account-show',compact('data'));
    }
    public function list() {
        $data = array (["id"=>1,"username"=>"nahida","password"=>"nahida123","fullname"=>"nahidaa"],
                       ["id"=>2,"username"=>"nahida","password"=>"nahida123","fullname"=>"nahidaa"]);
        return view('account-list',compact('data'));
    }
}
