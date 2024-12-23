<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeproductseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vdmt_typeproducts')->insert([
            'vdmttypeproductid' => "tp01",
            'vdmttypeproductname' => "Loai test",
            'vdmttypeproductstatus' => 1,
        ]);
        DB::table('vdmt_typeproducts')->insert([
            'vdmttypeproductid' => "tp02",
            'vdmttypeproductname' => "Loai test 22",
            'vdmttypeproductstatus' => 0,
        ]);
    }
}
