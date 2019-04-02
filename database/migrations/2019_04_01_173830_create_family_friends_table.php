<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_friends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('app_id')->unsigned();
            $table->string('name', 100);
            $table->string('title', 100);
            $table->string('dept', 100);
            $table->string('company', 100);
            $table->string('relationship', 100);
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
        Schema::dropIfExists('family_friends');
    }
}
