<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('interview_grade_id')->unsigned();
            $table->bigInteger('hr_id')->unsigned();
            $table->integer('score_overall')->unsigned();
            $table->text('note');
            $table->foreign('interview_grade_id')->references('id')->on('interview_grades');
            $table->foreign('hr_id')->references('id')->on('hr');
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
        Schema::dropIfExists('score_grades');
    }
}
