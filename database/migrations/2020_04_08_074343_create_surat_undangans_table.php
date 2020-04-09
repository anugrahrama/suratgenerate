<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratUndangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_undangans', function (Blueprint $table) {
            $table->id();
            $table->string('nosurat');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('tanggal_pembuatan');
            $table->string('nama_penerima');
            $table->longText('event');
            $table->longText('kegiatan');
            $table->string('hari_tanggal_pelaksanaan');
            $table->string('jam_pelaksanaan');
            $table->longText('tempat_pelaksanaan');
            $table->string('jabatan_pembuat');
            $table->string('nama_pembuat');
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
        Schema::dropIfExists('surat_undangans');
    }
}
