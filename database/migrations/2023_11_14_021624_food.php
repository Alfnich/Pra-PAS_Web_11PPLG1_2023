<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->text('deskripsi');
            $table->unsignedInteger('harga');
            $table->date('tgl_produksi');
            $table->date('tgl_kadaluwarsa');
            $table->json('bahan'); // Using json instead of text for bahan
            $table->unsignedInteger('kalori');
            $table->unsignedInteger('protein');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};