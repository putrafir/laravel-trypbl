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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('namaLengkap');
            $table->string('jenisKelamin');
            $table->date('tanggalLahir');
            $table->string('alamat');
            $table->string('email');
            $table->string('kota');
            $table->string('nisn');
            $table->string('tempatLahir');
            $table->string('provinsi');
            $table->string('telepon');
            // berkas
            $table->text('pasFoto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
