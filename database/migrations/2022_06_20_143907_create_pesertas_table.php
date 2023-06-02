<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jabatan');
            $table->string('nama_desa');
            $table->string('pangkat');
            $table->string('modul')->nullable(true);
            $table->string('nmr_sertifikat')->nullable(true);
            $table->string('status_lulus')->nullable(true);
            $table->string('nip')->unique();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('jenkel');
            $table->string('asal_peserta');
            $table->string('usia');
            $table->string('tanggal_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
};
