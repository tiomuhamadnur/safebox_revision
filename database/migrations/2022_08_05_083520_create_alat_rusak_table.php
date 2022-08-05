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
        Schema::create('alat_rusak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('alat_id')->unsigned();
            $table->string('qty');
            $table->timestamps();

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
        Schema::dropIfExists('alat_rusak');
    }
};