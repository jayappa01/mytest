<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('game_name');
            $table->integer('serial_number')->unique();
            $table->integer('game_type');
            $table->string('open_time');
            $table->string('close_time');
            $table->integer('shut_before');
            $table->integer('day_of_game');
            $table->tinyint('payble')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->tinyint('active')->default(1);
        });

        Schema::create('single_game_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id');
            $table->string('schedule_time')->unsigned()->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
        Schema::dropIfExists('single_game_times');
    }


}
