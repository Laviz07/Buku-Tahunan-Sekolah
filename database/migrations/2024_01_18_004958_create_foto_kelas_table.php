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
        Schema::create('foto_kelas', function (Blueprint $table) {
            $table->integer("id_kelas")->nullable(false);
            $table->string("foto_kelas", 255)->nullable(false);
            $table->timestamps();

            // $table->foreign('id_kelas')->references('id_kelas')->on('kelas')
            //     ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_kelas');
    }
};
