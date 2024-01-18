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
        Schema::create('kelas', function (Blueprint $table) {
            $table->integer("id_kelas")->autoIncrement();
            $table->integer("id_walas")->nullable(true);
            $table->string("nama_kelas", 50)->nullable(false);
            $table->string("kepanjangan_nama", 50)->nullable(false);
            $table->text("deskripsi_kelas")->nullable(false);
            $table->timestamps();

            // $table->foreign('id_walas')->references('id_walas')->on('wali_kelas')
            //     ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
