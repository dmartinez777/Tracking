<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->string('org_name', 100);
            $table->string('dept', 100);
            $table->date('year_of_work');
            $table->integer('duration');
            $table->string('job_title');
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
        Schema::dropIfExists('orgs');
    }
}
