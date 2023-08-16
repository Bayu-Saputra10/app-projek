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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->string('pejabat');
            $table->string('jabatan');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('waktuMulai');
            $table->string('waktuAkhir');
            $table->string('keperluan');
            $table->enum('status', ['Disetujui', 'Ditolak', 'Pengajuan'])->default('Pengajuan');
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
        Schema::dropIfExists('forms');
    }
};
