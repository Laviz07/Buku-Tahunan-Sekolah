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
        Schema::create('wali_kelas', function (Blueprint $table) {
            $table->integer("id_walas")->autoIncrement();
            $table->bigInteger("nip_guru")->nullable(false);
            $table->bigInteger("id_kelas")->nullable(false);
            $table->text("sambutan_walas")->nullable(false);
            $table->timestamps();

            // $table->foreign("id_kelas")->on("kelas")->references("id_kelas")
            // ->onDelete("cascade")->onUpdate("cascade");

            // $table->foreign('nip_guru')->references('nip_guru')->on('guru')
            // ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_kelas');
    }
};
