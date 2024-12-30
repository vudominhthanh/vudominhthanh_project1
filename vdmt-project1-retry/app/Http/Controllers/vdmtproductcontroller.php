<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\vdmtproduct;
use App\Models\vdmttypeproduct;

class vdmtproductcontroller extends Controller
{
    public function vdmtlistproduct() {
        $vdmtproducts = vdmtproduct::all();
        return view('frontend.admin.product.vdmtlistproduct',['vdmtproducts'=>$vdmtproducts]);
    }
    //them moimoi
    public function vdmtproductcreate() {
        $vdmttypeproducts = vdmttypeproduct::all();
        $vdmtproducts = new vdmtproduct;
        return view('frontend.admin.product.vdmtproductcreate',['vdmtproducts'=>$vdmtproducts,'vdmttypeproducts'=>$vdmttypeproducts]);
    }
    public function vdmtproductcreatesubmit(Request $request) {
        $vdmtproducts = new vdmtproduct;
        $vdmtproducts->vdmtproductid = $request->vdmtproductid;
        $vdmtproducts->vdmtproductname = $request->vdmtproductname;

        $vdmtproducts->validate([
            'vdmtproductimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]); 
        $imageName = time().'.'.$request->vdmtproductimage->extension(); 
        $request->vdmtproductimage->move(public_path('images'), $imageName);
        $vdmtproducts->vdmtproductimage = 'images/' . $imageName; 

        $vdmtproducts->vdmtproductquantity = $request->vdmtproductquantity;
        $vdmtproducts->vdmtproductprice = $request->vdmtproductprice;
        $vdmtproducts->vdmttypeproductid = $request->vdmttypeproductid;
        $vdmtproducts->vdmtproductstatus = $request->vdmtproductstatus;
        $vdmtproducts->save();
        return redirect()->route('admin.list-product');
    } 
    public function vdmtproductedit($id) {
        $vdmttypeproducts = vdmttypeproduct::all();
        $vdmtproducts = vdmtproduct::find($id);
        return view('frontend.admin.product.edit',['vdmtproducts'=>$vdmtproducts,'vdmttypeproducts'=>$vdmttypeproducts]);
    }
    public function vdmtproducteditsubmit(Request $request) {
        $vdmtproducts = vdmtproduct::find($request->id);
        $vdmtproducts->vdmtproductid = $request->vdmtproductid;
        $vdmtproducts->vdmtproductname = $request->vdmtproductname;

        $vdmtproducts->validate([
            'vdmtproductimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]); 
        // if ($vdmtproducts) { 
        //     $imageName = time().'.'.$request->vdmtproductimage->extension(); 
        //     $request->vdmtproductimage->move(public_path('images'), $imageName); 
        //     if ($vdmtproducts->vdmtproductimage) { $oldImagePath = public_path($vdmtproducts->vdmtproductimage); 
        //         if (file_exists($oldImagePath)) { 
        //             unlink($oldImagePath); 
        //         }
        //     }
        // }
        if ($request->hasFile('vdmtproductimage')) { 
            $imageName = time().'.'.$request->vdmtproductimage->extension(); 
            $request->vdmtproductimage->move(public_path('images'), $imageName); 
            if ($vdmtproducts->vdmtproductimage) { $oldImagePath = public_path($vdmtproducts->vdmtproductimage); 
                if (file_exists($oldImagePath)) { 
                    unlink($oldImagePath); 
                }
            }
        }

        $vdmtproducts->vdmtproductimage = 'images/' . $imageName; 

        $vdmtproducts->vdmtproductquantity = $request->vdmtproductquantity;
        $vdmtproducts->vdmtproductprice = $request->vdmtproductprice;
        $vdmtproducts->vdmttypeproductid = $request->vdmttypeproductid;
        $vdmtproducts->vdmtproductstatus = $request->vdmtproductstatus;
        $vdmtproducts->save();
        return redirect()->route('admin.list-product');
    }
    public function vdmtproductdelete($id)
    {
        $vdmtproducts = DB::delete('delete from vdmtproduct where id =?',[$id]);
        return redirect()->route('admin.list-product');
    }
}
