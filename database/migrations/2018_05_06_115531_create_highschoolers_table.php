<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighschoolersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('highschoolers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('playerSAT')->nullable();
            $table->integer('playerACT')->nullable();
            $table->integer('playerPSAT')->nullable();
            $table->integer('playerGPA')->nullable();
            $table->integer('ncaaClearinghousePIN')->nullable();
            $table->integer('playerWeight');
            $table->integer('playerHeight');
            $table->string('playerTranscript')->nullable();
            $table->string('playerHighlightVideo')->nullable();
            $table->string('playerPhoto')->nullable();
            $table->string('playerHSGrade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('highschooler');
    }
}
