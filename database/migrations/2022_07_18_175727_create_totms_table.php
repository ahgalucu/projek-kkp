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
        Schema::create('totms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prov');
            $table->string('nama_kota');
            $table->string('nama_kec');
            $table->string('nama_desa');
            $table->string('nama_pelatihan');
            $table->string('tgl_pelatihan');
            $table->string('waktu_pelaksanaan');
            $table->string('nama_peserta');
            $table->string('nik')->unique();
            $table->string('nip')->unique();
            $table->string('asal_daerah');
            $table->string('tgl_lahir');
            $table->string('jenkel');
            $table->string('usia');
            $table->string('pendidikan_terakhir');
            $table->string('nama_jabatan');
            $table->string('pangkat');
            $table->string('nilai');
            $table->string('status_lulus');
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
        Schema::dropIfExists('totms');
    }
};
