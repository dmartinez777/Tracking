<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_degrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('events_id')->unsigned();
            $table->bigInteger('degrees_id')->unsigned();
            $table->timestamps();
            $table->foreign('events_id')->references('id')->on('events');
            $table->foreign('degrees_id')->references('id')->on('degrees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_degrees');
    }
}
