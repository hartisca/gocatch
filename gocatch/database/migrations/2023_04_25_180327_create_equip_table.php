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
        Schema::create('equip', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_partida');
            $table->foreign('id_partida')->references('id')->on('partida')//fk equip
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom');
            $table->string('punts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equip');
    }
};