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
        Schema::create('osis', function (Blueprint $table) {
            $table->bigInteger('id_osis')->autoIncrement();
            $table->string('id_sekolah', false)->nullable(false);
            $table->bigInteger('nis_siswa', false)->nullable(false);
            $table->string('jabatan_osis', 50)->nullable(false);
            $table->date('mulai_jabatan_osis')->nullable(false);
            $table->date('selesai_jabatan_osis')->nullabel(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osis');
    }
};
