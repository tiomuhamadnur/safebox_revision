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
        Schema::create('pegawai_sirkulasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pegawai_id')->unsigned();
            $table->bigInteger('alat_id')->unsigned();
            $table->enum('status', ['pinjam', 'selesai'])->nullable();
            $table->timestamps();

            $table->foreign('pegawai_id')->on('pegawai')->references('id');
            $table->foreign('alat_id')->on('alat')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai_sirkulasi');
    }
};