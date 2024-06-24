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
        //
        Schema::create('IDKota', function (Blueprint $table) {
            $table->id();
            $table->string('namakota', 255);
            $table->string('namapemimpin', 255);
            $table->string('tglberdiri', 50);
            $table->string('jmlpenduduk', 50);
            $table->string('luaswilayah',100);
            $table->string('jeniskota', 255);
            $table->string('keungulan', 255);
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
