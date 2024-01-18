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
        Schema::create('kepsek', function (Blueprint $table) {
            $table->bigInteger('id_kepsek')->autoIncrement();
            // $table->bigInteger('id_sekolah', false)->nullable(false);
            $table->string('nama_kepsek', 50)->nullable(false);
            $table->string('cover_kepsek', 255)->nullable(false);
            $table->string('instagram_kepsek', 255)->nullable(false);
            $table->string('x_kepsek', 255)->nullable(false);
            $table->string('facebook_kepsek', 255)->nullable(false);
            $table->string('hobi_kepsek', 50)->nullable(false);
            $table->string('quotes_kepsek', 50)->nullable(false);
            $table->string('tempat_lahir_kepsek', 50)->nullable(false);
            $table->date('tanggal_lahir_kepsek')->nullable(false);
            $table->text('alamat_kepsek')->nullable(false);
            $table->timestamps();
            // FK SEKOLAH
            // $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepsek');
    }
};
