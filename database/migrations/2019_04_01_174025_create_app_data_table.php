<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->date('dob');
            $table->integer('gender');
            $table->string('phone', 10);
            $table->boolean('sms_notify');
            $table->boolean('email_notify');
            $table->binary('image');
            $table->string('place_of_birth', 100);
            $table->string('full_address', 100);
            $table->boolean('marriage');
            $table->integer('location_agree');
            $table->integer('overtime_agree');
            $table->string('thesis_title', 100);
            $table->integer('cont_edu');
            $table->date('cont_edu_date');
            $table->string('expected_salary', 8);
            $table->foreign('app_id')->references('id')->on('apps');
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
        Schema::dropIfExists('app_data');
    }
}
