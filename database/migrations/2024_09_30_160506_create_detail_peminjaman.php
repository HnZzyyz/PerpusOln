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
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->id(); // ID untuk detail peminjaman
            $table->integer('id_peminjaman'); // Pastikan ini sesuai dengan tipe di tabel peminjaman
            $table->string('kode_buku'); // Kode Buku
            $table->integer('jumlah'); // Jumlah Buku
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
            
            // Menambahkan foreign key
            $table->foreign('id_peminjaman')->references('id')->on('peminjaman')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('kode_buku')->references('kode_buku')->on('buku')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjaman');
    }
};
