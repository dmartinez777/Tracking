<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hr_id')->unsigned();
            $table->bigInteger('interview_taken_id')->unsigned();
            $table->bigInteger('score')->unsigned();
            $table->text('notes');
            $table->foreign('interview_taken_id')->references('id')->on('interview_taken');
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
        Schema::dropIfExists('interview_grades');
    }
}
