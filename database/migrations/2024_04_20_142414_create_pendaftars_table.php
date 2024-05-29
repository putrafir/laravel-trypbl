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
            $table->string('agama');
            $table->string('provinsi');
            $table->string('telepon');
            $table->unsignedBigInteger('parent_dbs_id');
            $table->unsignedBigInteger('asalSekolah_id');
            // $table->unsignedBigInteger('berkas_id');
            $table->foreign('parent_dbs_id')->references('id')->on('parent_dbs');
            $table->foreign('asalSekolah_id')->references('id')->on('asal_sekolahs');
            // $table->foreign('berkas_id')->references('id')->on('berkas');
            // berkas
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
