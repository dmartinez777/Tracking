<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('score_question_id')->unsigned();
            $table->bigInteger('score_grade_id')->unsigned();
            $table->integer('score');
            $table->text('note');
            $table->foreign('score_question_id')->references('id')->on('score_questions');
            $table->foreign('score_grade_id')->references('id')->on('score_grades');
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
        Schema::dropIfExists('scores');
    }
}
