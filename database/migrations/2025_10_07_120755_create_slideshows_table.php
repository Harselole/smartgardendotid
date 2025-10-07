<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('slideshow', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->boolean('is_tampil')->default(0); // ⬅️ default 0
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('slideshow');
    }
};
