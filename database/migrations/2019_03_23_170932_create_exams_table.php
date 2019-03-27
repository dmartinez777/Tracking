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
            $table->string('name', 20);
            $table->integer('max_score')->unsigned();
            $table->integer('max_duration')->unsigned();
            $table->integer('order')->unsigned();
            $table->bigInteger('processes_id')->unsigned();
            $table->boolean('is_active')->default(1);
            $table->foreign('processes_id')->references('id')->on('processes');
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
