<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school_name', 200);
            $table->string('event_abv', 20);
            $table->float('min_gpa');
            $table->bigInteger('hr_id')->unsigned();
            $table->dateTime('deadline');
            $table->dateTime('test_schedule');
            $table->timestamps();
            $table->foreign('hr_id')->references('id')->on('hr');
        });
//
//        Schema::table('events', function (Blueprint $table) {
//            $table->foreign('hr_id')->references('id')->on('hr');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
