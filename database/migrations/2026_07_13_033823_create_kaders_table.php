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
    Schema::create('kaders', function (Blueprint $table) {
        $table->id();
        // Menghubungkan kader ke tabel posyandus (Kalau posyandu dihapus, data kader ikut terhapus)
        $table->foreignId('posyandu_id')->constrained()->onDelete('cascade');
        $table->string('nama_kader');
        $table->string('no_telp')->nullable(); // nullable artinya boleh dikosongkan dulu
        $table->string('jabatan');             // Contoh: Ketua, Sekretaris, Anggota
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaders');
    }
};
