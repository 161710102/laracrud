<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
            $table->string('nama_mbl');
            $table->unsignedInteger('jenis_id');
            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('CASCADE');
            $table->unsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('CASCADE');
            $table->date('tahun');
            $table->integer('harga');
            $table->string('foto');
            $table->longText('deskripsi');
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
        Schema::dropIfExists('juals');
    }
}
