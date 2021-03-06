<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('apps_id')->unsigned();
            $table->bigInteger('edu_types_id')->unsigned();
            $table->string('school_name', 100);
            $table->string('major', 100);
            $table->string('study_program', 100);
            $table->float('gpa');
            $table->date('grad_date');
            $table->foreign('apps_id')->references('id')->on('apps');
            $table->foreign('edu_types_id')->references('id')->on('edu_types');
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
        Schema::dropIfExists('edus');
    }
}
