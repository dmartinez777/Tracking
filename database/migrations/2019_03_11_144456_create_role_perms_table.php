<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_perms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('roles_id')->unsigned();
            $table->bigInteger('perms_id')->unsigned();
            $table->timestamps();
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->foreign('perms_id')->references('id')->on('perms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_perms');
    }
}
