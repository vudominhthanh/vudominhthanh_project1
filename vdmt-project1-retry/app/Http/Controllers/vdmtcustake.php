<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vdmtcustomer;

class vdmtcustake extends Controller
{
    public function getCustomer($id) { 
        $customer = vdmtcustomer::find($id); 
        return response()->json($customer); 
    }
}
