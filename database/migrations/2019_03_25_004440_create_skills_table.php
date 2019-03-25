<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->bigInteger('skill_type_id')->unsigned();
            $table->bigInteger('skill_level_id')->unsigned();
            $table->foreign('app_id')->references('id')->on('apps');
            $table->foreign('skill_type_id')->references('id')->on('skill_types');
            $table->foreign('skill_level_id')->references('id')->on('skill_levels');
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
        Schema::dropIfExists('skills');
    }
}
