<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('score_type_id')->unsigned();
            $table->string('question', 255);
            $table->integer('max_score');
            $table->integer('order');
            $table->foreign('score_type_id')->references('id')->on('score_types');
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
        Schema::dropIfExists('score_questions');
    }
}
