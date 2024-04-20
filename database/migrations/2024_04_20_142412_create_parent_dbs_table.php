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
        Schema::create('parent_dbs', function (Blueprint $table) {
            $table->id();
            $table->string('namaAyah');
            $table->string('nikAyah');
            $table->string('pekerjaanAyah');
            $table->string('teleponAyah');
            $table->string('alamatAyah');
            $table->string('usiaAyah');
            $table->string('namaIbu');
            $table->string('nikIbu');
            $table->string('pekerjaanIbu');
            $table->string('teleponIbu');
            $table->string('alamatIbu');
            $table->string('usiaIbu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_dbs');
    }
};
