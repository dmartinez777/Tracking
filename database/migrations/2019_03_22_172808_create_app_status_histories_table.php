<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppStatusHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_status_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('app_statuses_id');
            $table->unsignedBigInteger('apps_id');
            $table->unsignedBigInteger('hr_id');
            $table->timestamps();
            $table->foreign('app_statuses_id')->references('id')->on('app_statuses');
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
        Schema::dropIfExists('app_status_histories');
    }
}
