<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('nama_mahasiswa',100);
            $table->char('nim',15)->unique();
            $table->string('fakultas_jurusan_semester',100);
            $table->integer('no_hp_mahasantri',15);
            $table->string('tempat_tanggal_lahir',100);
            $table->string('jalur_masuk',15);
            $table->string('nama_org_tua',100);
            $table->integer('no_hp_org_tua',15);
            $table->string('alamat_lengkap',100);
            $table->string('nama_mabna',100);
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
        Schema::dropIfExists('mahasiswa');
    }
}
