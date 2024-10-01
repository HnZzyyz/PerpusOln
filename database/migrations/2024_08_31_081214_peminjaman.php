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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('id')->primary()->autoIncrement(); // ID sebagai primary key
            $table->string('nisn'); // NISN
            $table->date('tanggal_pinjam'); // Tanggal Pinjam
            $table->date('tanggal_kembali'); // Tanggal Kembali
            $table->timestamps(); // Timestamps untuk created_at dan updated_at

            // Menambahkan foreign key
            $table->foreign('nisn')->references('nisn')->on('students')->onDelete('cascade');
        });  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
