<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->string('company_name', 100);
            $table->string('dept', 100);
            $table->boolean('is_current_job');
            $table->integer('duration');
            $table->string('job_title', 50);
            $table->integer('salary');
            $table->text('resign_reason');
            $table->foreign('app_id')->references('id')->on('apps');
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
        Schema::dropIfExists('works');
    }
}
