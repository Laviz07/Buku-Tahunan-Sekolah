<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foto_siswa', function (Blueprint $table) {
            $table->integer("nis_siswa")->nullable(false);
            $table->string("foto_siswa", 255)->nullable(false);
            $table->timestamps();

            // $table->foreign('nis_siswa')->references('id_siswa')->on('siswa')
            //     ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_siswa');
    }
};
