<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vdmttypeproductseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vdmttypeproduct')->insert([
            'vdmttypeproductid' => "tp01",
            'vdmttypeproductname' => "Loai test",
            'vdmttypeproductstatus' => 1,
        ]);
        DB::table('vdmttypeproduct')->insert([
            'vdmttypeproductid' => "tp02",
            'vdmttypeproductname' => "Loai test 2",
            'vdmttypeproductstatus' => 0,
        ]);
    }
}
