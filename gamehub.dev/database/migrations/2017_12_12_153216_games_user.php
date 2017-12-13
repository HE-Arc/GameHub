<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamesUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('games_user', function (Blueprint $table) {
          $table->integer('games_id');
          $table->integer('user_id');
          $table->integer('grade');
          $table->boolean('played');
          $table->primary(['games_id', 'user_id']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games_user');
    }
}
