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
        Schema::create('guru', function (Blueprint $table) {
            $table->bigInteger('nip_guru')->autoIncrement();
            $table->bigInteger('sekolah', false)->nullable(false);
            $table->string('nama_guru', 50)->nullable(false);
            $table->string('instagram_guru', 255)->nullable(false);
            $table->string('cover_guru', 255)->nullable(false);
            $table->string('x_guru', 255)->nullable(false);
            $table->string('facebook_guru', 255)->nullable(false);
            $table->string('tempat_lahir_guru', 50)->nullable(false);
            $table->date('tanggal_lahir_guru')->nullable(false);
            $table->string('hobi_guru', 255)->nullable(false);
            $table->string('quotes_guru', 255)->nullable(false);
            $table->timestamps();
            //FK SEKOLAH
            $table->foreign('id_sekolah')->references('id_sekolah')->on('sekolah')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
