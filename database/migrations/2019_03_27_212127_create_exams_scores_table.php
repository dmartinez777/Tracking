<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('apps_id')->unsigned();
            $table->bigInteger('exams_id')->unsigned();
            $table->bigInteger('hr_id')->unsigned();
            $table->bigInteger('exams_statuses_id')->unsigned();
            $table->integer('score')->unsigned();
            $table->text('note');
            $table->foreign('apps_id')->references('id')->on('apps');
            $table->foreign('exams_id')->references('id')->on('exams');
            $table->foreign('hr_id')->references('id')->on('hr');
            $table->foreign('exams_statuses_id')->references('id')->on('exams_statuses');
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
        Schema::dropIfExists('exam_scores');
    }
}
