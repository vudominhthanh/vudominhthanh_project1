<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vdmt_products',function(Blueprint $table) {
            $table->id();
            $table->string('vdmtproductid',255);
            $table->string('vdmtproductname',255);
            $table->string('vdmtproductimage',255);
            $table->integer('vdmtproductquantity');
            $table->float('vdmtproductprice');
            $table->string('vdmttypeproductid',255);
            $table->tinyInteger('vdmtproductstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
