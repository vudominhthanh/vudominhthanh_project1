<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class searchcontroller extends Controller { 
    public function search(Request $request) { 
        $searchin = $request->input('searchin');
        return view('search.results', compact('searchin')); 
    }
};