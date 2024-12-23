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
        Schema::create('vdmt_customers',function(Blueprint $table) {
            $table->id();
            $table->string('vdmtcusid',255)->unique();
            $table->string('vdmtcusname',255);
            $table->string('vdmtcusemail',255);
            $table->string('vdmtcuspassword',255);
            $table->string('vdmtcusnumber',255);
            $table->string('vdmtcusaddress',255);
            $table->datetime('vdmtcusdatecreate');
            $table->tinyInteger('vdmtcusstatus');
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
