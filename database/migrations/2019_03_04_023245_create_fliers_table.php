<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fliers', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('school_name', 200)->nullable(true);
            $table->dateTime('deadline')->nullable(true);
            $table->dateTime('test_schedule')->nullable(true);
            $table->string('position', 200);
            $table->integer('gpa');
            $table->unsignedBigInteger('documentation_id');
            $table->unsignedBigInteger('major_id');
            $table->timestamps();
        });

        Schema::table('fliers', function (Blueprint $table) {
            $table->foreign('documentation_id')->references('id')->on('documentations');
            $table->foreign('major_id')->references('id')->on('majors');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fliers');
    }
}
