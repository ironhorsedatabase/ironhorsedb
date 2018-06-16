<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('PlayerFName');
            $table->string('PlayerLName');
            $table->string('PlayerPhone');
            $table->string('PlayerEmail');
            $table->string('PlayerTwitter')->nullable()->default("N/A");
            $table->integer('PlayerHSGradYear');
            $table->string('PlayerStreet');
            $table->char('PlayerZip', 5);
            $table->char('PlayerState', 2);
            $table->string('PlayerCity');
            $table->string('PlayerPosition');
            $table->string('PlayerSpringTeam');
            $table->string('PlayerSchool');
            $table->string('PlayerGrade');
            $table->string('PlayerCommitted')->nullable();
            $table->integer('playerSAT')->nullable();
            $table->integer('playerACT')->nullable();
            $table->integer('playerPSAT')->nullable();
            $table->integer('playerGPA')->nullable();
            $table->integer('ncaaClearinghousePIN')->nullable();
            $table->integer('playerWeight')->nullable();
            $table->integer('playerHeight')->nullable();
            $table->string('playerTranscript')->nullable();
            $table->string('playerHighlightVideo')->nullable();
            $table->string('playerPhoto')->nullable();
            $table->integer("PlayerJerseyNumber")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
