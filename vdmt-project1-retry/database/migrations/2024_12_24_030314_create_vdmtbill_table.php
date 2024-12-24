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
        Schema::create('vdmtbill', function (Blueprint $table) {
            $table->id();
            $table->string('vdmtbillid',255)->unique();
            $table->bigInteger('vdmtcusid')->references('id')->on('vdmtcustomer');
            $table->date('vdmtbilldate');
            $table->date('vdmtbilltake');
            $table->string('vdmtcusname',255);
            $table->string('vmdtcusemail',255);
            $table->string('vdmtcusnumber',255);
            $table->string('vdmtcusaddress',255);
            $table->float('vdmtbilltotal');
            $table->tinyInteger('vdmtbillstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vdmtbill');
    }
};
