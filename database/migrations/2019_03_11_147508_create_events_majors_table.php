<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_majors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('events_id')->unsigned();
            $table->bigInteger('majors_id')->unsigned();
            $table->timestamps();
            $table->foreign('events_id')->references('id')->on('events');
            $table->foreign('majors_id')->references('id')->on('majors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_majors');
    }
}
