<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 10);
            $table->integer('max_score');
            $table->integer('max_duration');
            $table->integer('order');
            $table->bigInteger('process_id')->unsigned();
            $table->boolean('is_active');
            $table->foreign('process_id')->references('id')->on('process');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('exams');
    }
}
