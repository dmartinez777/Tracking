<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('apps_id')->unsigned();
            $table->bigInteger('skills_id')->unsigned();
            $table->bigInteger('levels_id')->unsigned();
            $table->foreign('apps_id')->references('id')->on('apps');
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('levels_id')->references('id')->on('levels');
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
        Schema::dropIfExists('apps_skills');
    }
}
