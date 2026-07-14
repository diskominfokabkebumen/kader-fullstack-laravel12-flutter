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
        Schema::create('posyandus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posyandu'); // Contoh: Posyandu Mawar 1
            $table->text('alamat');          // Contoh: Dusun Karanglo RT 02
            $table->string('kecamatan');     // Contoh: Kebumen
            $table->timestamps();            // Otomatis mencatat waktu dibuat & diubah
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posyandus');
    }
};
