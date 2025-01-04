<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\vdmtuser;
use Hash;

class vdmttypeproductseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    // public function run(): void
    // {
    //     $users = vdmtuser::all(); 
    //     foreach ($users as $user) { 
    //         $user->password = bcrypt($user->password); 
    //         $user->save(); 
    //     }
    // }
    public function run(){
        DB::table('users')->insert([ 
            'name' => 'Admin',
            'email' => 'thanhvu@gmail.com', 
            'password' => Hash::make('123456'),
        ]);
    }
    
}

