<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class vdmtuser extends Authenticatable
// {
//     use HasFactory;

//     protected $table="vdmtuser";

//     public function validate($data) { 
//         $validator = Validator::make($data, [ 
//             'vdmtusername' => 'required|email', 
//             'password' => 'required|min:6',
//         ]);
//     }
//     protected $fillable = [ 
//         'vdmtusername', 
//         'password', 
//     ]; 
//     public function setPasswordAttribute($value) { 
//         $this->attributes['password'] = bcrypt($value); 
//     }
// }
{
    protected $table = 'vdmtuser';

    protected $fillable = [
        'vdmtusername',
        'password',
    ];
    public function validate($data) { 
        $validator = Validator::make($data, [ 
            'vdmtusername' => 'required|email', 
            'password' => 'required|min:6',
        ]);
    }

    // public function setPasswordAttribute($value) {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    // public function getAuthIdentifierName() {
    //     return 'vdmtusername';
    // }
}
