<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger(‘users_id’);
            $table->unsignedBigInteger(‘events_id’);
            $table->unsignedBigInteger(‘processes_id’);
            $table->unsignedBigInteger(‘apps_statuses_id’);
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('events_id')->references('id')->on('events');
            $table->foreign('processes_id')->references('id')->on('processes');
            $table->foreign('app_statuses_id')->references('id')->on('app_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
