<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaceHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_horses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('race_id');
            $table->unsignedInteger('horse_id');
            $table->integer('position')->nullable();
            $table->integer('covered_distance')->nullable();
            $table->integer('finish_time')->nullable();
            $table->foreign('race_id')->references('id')->on('race');
            $table->foreign('horse_id')->references('id')->on('horse');
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
        Schema::dropIfExists('race_horses');
    }
}
