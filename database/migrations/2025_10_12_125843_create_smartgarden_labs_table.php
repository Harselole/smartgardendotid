<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('smartgarden_labs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->string('subjudul')->nullable();
            $table->text('subdeskripsi')->nullable();

            // Produk 1
            $table->string('gambarproduk1')->nullable();
            $table->string('namaproduk1')->nullable();
            $table->text('deskripsiproduk1')->nullable();

            // Produk 2
            $table->string('gambarproduk2')->nullable();
            $table->string('namaproduk2')->nullable();
            $table->text('deskripsiproduk2')->nullable();

            // Produk 3
            $table->string('gambarproduk3')->nullable();
            $table->string('namaproduk3')->nullable();
            $table->text('deskripsiproduk3')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('smartgarden_lab');
    }
};
