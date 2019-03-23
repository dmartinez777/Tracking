<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('processes_id');
            $table->unsignedBigInteger('apps_id');
            $table->unsignedBigInteger('hr_id');
            $table->timestamps();
            $table->foreign('processes_id')->references('id')->on('processes');
            $table->foreign('apps_id')->references('id')->on('apps');
            $table->foreign('hr_id')->references('id')->on('hr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process_histories');
    }
}
