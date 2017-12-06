<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_game', function (Blueprint $table) {
            // //$table->increments('id');
            // $table->integer('user_id')->unsigned()->primary();
            // $table->integer('steam_id')->unsigned()->primary();
            // $table->boolean('played');
            // $table->integer('grades');
            // $table->timestamps();
            $table->integer('user_id');
            $table->integer('steam_id');
            $table->integer('grades');
            $table->primary(['user_id', 'steam_id']);
        });
        // Schema::table('user_games', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('steam_id')->references('steam_id')->on('games')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_game');
    }
}
