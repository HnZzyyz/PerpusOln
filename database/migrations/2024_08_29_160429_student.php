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
        Schema::create('students', function (Blueprint $table) {
            $table->string('nisn', 10)->primary();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('no_telp', 13);
            $table->string('kode_kelas', 10);
            $table->timestamps();

            $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
