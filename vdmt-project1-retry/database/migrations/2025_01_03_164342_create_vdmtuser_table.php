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
        Schema::create('vdmtuser', function (Blueprint $table) {
            $table->id();
            $table->string('vdmtusername',255)->unique();
            $table->string('password',255);
            $table->tinyInteger('vdmtstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vdmtuser');
    }
};
