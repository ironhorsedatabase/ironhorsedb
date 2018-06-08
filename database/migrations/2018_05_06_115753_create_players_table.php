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
            $table->integer('PlayerPhone');
            $table->string('PlayerEmail');
            $table->string('PlayerTwitter')->nullable();
            $table->integer('PlayerHSGradYear');
            $table->string('PlayerStreet');
            $table->char('PlayerZip', 5);
            $table->char('PlayerState', 2);
            $table->string('PlayerCity');
            $table->string('PlayerPosition');
            $table->string('PlayerSpringTeam');
            $table->string('PlayerSchool');
            $table->string('PlayerGrade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player');
    }
}
