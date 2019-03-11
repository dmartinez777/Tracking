<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 100);
            $table->string('email', 100);
            $table->string('image', 200);
            $table->boolean('active');
            $table->string('code', 32);
            $table->bigInteger('roles_id')->unsigned();
            $table->bigInteger('created_by');
            $table->string('note', 255);
            $table->timestamps();
            $table->foreign('roles_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hr');
    }
}
