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
        Schema::create('asal_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('provinsiSMP');
            $table->string('asalSMP');
            $table->string('kotaSMP');
            $table->string('alamatSMP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asal_sekolahs');
    }
};
