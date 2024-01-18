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
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigInteger("nis_siswa")->nullable(false)->primary;
            $table->integer("id_kelas")->nullable(false);
            $table->string("nama_siswa", 50)->nullable(false);
            $table->string("tempat_lahir", 50)->nullable(false);
            $table->date("tanggal_lahir")->nullable(false)->default('2000-01-01');
            $table->string("alamat", 255)->nullable(false);
            $table->string("quotes", 255)->nullable(false);
            $table->string("hobi", 50)->nullable(false);
            $table->string("instagram", 255)->nullable(true);
            $table->string("x", 255)->nullable(true);
            $table->string("facebook", 255)->nullable(true);
            $table->timestamps();

            // $table->foreign('id_kelas')->references('id_kelas')->on('kelas')
            //     ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
