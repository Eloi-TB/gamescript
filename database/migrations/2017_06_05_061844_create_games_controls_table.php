<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_controls', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('game_id')->unsigned();
             $table->foreign('game_id')->references('id')->on('games');
             $table->integer('control_id')->unsigned();
             $table->foreign('control_id')->references('id')->on('controls');
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
        Schema::dropIfExists('gameControls');
    }
}
