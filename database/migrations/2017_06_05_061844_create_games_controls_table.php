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
        Schema::create('gameControls', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('game_id')->unsigned();
             $table->foreign('game_id')->references('id')->on('games');
             $table->integer('controls_id')->unsigned();
             $table->foreign('controls_id')->references('id')->on('controls');
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
