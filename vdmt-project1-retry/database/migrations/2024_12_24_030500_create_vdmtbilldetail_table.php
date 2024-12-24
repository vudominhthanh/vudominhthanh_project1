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
        Schema::create('vdmtbilldetail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vdmtbillid')->references('id')->on('vdmt-bills');
            $table->bigInteger('vdmtproductid')->references('id')->on('vdmt-products');
            $table->integer('vdmtquantity');
            $table->float('vdmtprice');
            $table->float('vdmttotal');
            $table->tinyInteger('vdmtdetailstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vdmtbilldetail');
    }
};
