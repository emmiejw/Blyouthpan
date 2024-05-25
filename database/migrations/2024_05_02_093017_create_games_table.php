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
            $table->id();
            $table->string('opponent_team')->nullable();
            $table->integer('opponent_score')->nullable();
            $table->integer('team_score')->nullable();
            $table->string('comments')->nullable();

            $table->unsignedBigInteger('fixture_id')->nullable();

            $table->foreign('fixture_id')->references('id')->on('fixtures');
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
        Schema::dropIfExists('games');
    }
}
