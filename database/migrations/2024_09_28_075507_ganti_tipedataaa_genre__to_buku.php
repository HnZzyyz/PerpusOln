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
        Schema::table('buku', function (Blueprint $table) {
            $table->enum('genre', ['Fiksi', 'Non-Fiksi', 'Fantasi', 'Romantis', 'Thriller', 'Horor', 'Sastra', 'Biografi', 'Sejarah', 'Ilmiah']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            $table->dropColumn('genre');
        });
    }
};
