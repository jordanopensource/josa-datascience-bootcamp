<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('josa_member');
            $table->integer('experience_years');
            $table->string('current_position');
            $table->longText('exp_handling_data_related_problems');
            $table->string('apply_for_data_scientist');
            $table->string('used_os');
            $table->string('programming_exp');
            $table->string('registration_fees');
            $table->string('time_availability');
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
        Schema::dropIfExists('registrations');
    }
}
