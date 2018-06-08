<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('coachFirstName');
            $table->string('coachLastName');
            $table->string('coachPhoneNumber');
            $table->string('coachTwitter')->nullable();
            $table->string('coachEmail');
            $table->string('coachSchool');
            $table->string('coachStreet');
            $table->string('coachCity');
            $table->string('coachState');
            $table->string('coachZip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
}
