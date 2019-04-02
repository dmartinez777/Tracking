<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWrittensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writtens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->bigInteger('written_qs_id')->unsigned();
            $table->string('answer', 255);
            $table->foreign('app_id')->references('id')->on('apps');
            $table->foreign('written_qs_id')->references('id')->on('written_qs');
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
        Schema::dropIfExists('writtens');
    }
}
