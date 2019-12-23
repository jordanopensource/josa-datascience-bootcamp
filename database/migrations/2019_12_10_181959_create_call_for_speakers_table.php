<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallForSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_for_speakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('phone_number');
            $table->string('email')->unique();
            $table->string('preferred_topics');
            $table->integer('experience_years');
            $table->string('current_position');
            $table->string('last_data_science_bootcamp_trainer');
            $table->string('josa_member');
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
        Schema::dropIfExists('call_for_speakers');
    }
}
