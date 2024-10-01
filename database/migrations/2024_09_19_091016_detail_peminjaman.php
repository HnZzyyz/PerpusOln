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
        $table->id();
        $table->unsignedBigInteger('id_peminjaman');
        $table->string('kode_buku');
        $table->integer('jumlah');
        $table->timestamps();
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
