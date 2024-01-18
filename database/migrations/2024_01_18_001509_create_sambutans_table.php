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
        Schema::create('sambutan', function (Blueprint $table) {
            $table->string('id_sambutan', 10)->primary();
            $table->string('penyambutan', 50)->nullable();
            $table->text('isi_sambutan')->nullable();
            $table->string('jabatan_penyambut', 50)->nullable();
            $table->string('foto_penyambut', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sambutan');
    }
};
