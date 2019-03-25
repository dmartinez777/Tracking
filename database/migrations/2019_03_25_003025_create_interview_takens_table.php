<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewTakensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_taken', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->bigInteger('interview_id')->unsigned();
            $table->bigInteger('interview_status_id')->unsigned();
            $table->integer('overall_score');
            $table->foreign('interview_id')->references('id')->on('interviews');
            $table->foreign('interview_status_id')->references('id')->on('interview_status');
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
        Schema::dropIfExists('interview_takens');
    }
}
