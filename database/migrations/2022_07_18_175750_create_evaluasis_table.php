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
        Schema::create('evaluasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prov');
            $table->string('nama_kota');
            $table->string('nama_kec');
            $table->string('nama_desa');
            $table->string('nama_pelatihan');
            $table->string('jml_angkatan');
            $table->string('nama_pengajar');
            $table->string('modul');

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
        Schema::dropIfExists('evaluasis');
    }
};
