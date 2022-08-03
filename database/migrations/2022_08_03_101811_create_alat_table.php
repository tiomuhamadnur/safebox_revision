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
        Schema::create('alat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uid')->unique();
            $table->string('id_inventory')->nullable();
            $table->date('tgl_sertifikasi')->nullable();
            $table->date('tgl_expired')->nullable();
            $table->enum('tipe', ['consumable', 'non-consumable']);
            $table->string('stock')->nullable();
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
        Schema::dropIfExists('alat');
    }
};