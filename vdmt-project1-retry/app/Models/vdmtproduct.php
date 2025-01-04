<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class vdmtproduct extends Model
{
    use HasFactory;

    protected $table= "vdmtproduct";

    public function validate($data) { 
        $validator = Validator::make($data, [ 
            'vdmtproductid' => 'required|string|max:255', 
            'vdmtproductname' => 'required|string|max:255', 
            'vdmtproductimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'vdmtproductquantity' => 'required|integer', 
            'vdmtproductprice' => 'required|numeric', 
            'vdmttypeproductid' => 'required|integer', 
            'vdmtproductstatus' => 'required|boolean', 
        ]);
    }
    public function getVdmtproductimageAttribute($value) { 
        return $value ? asset($value) : 'default_image_path'; 
    }
}
