<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name')->unique()->comment('Nama resource/menu di Filament');
            $table->string('menu_label')->comment('Label yang ditampilkan');
            $table->boolean('is_enabled')->default(true)->comment('Status aktif/nonaktif');
            $table->integer('order')->default(0)->comment('Urutan tampilan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_permissions');
    }
};