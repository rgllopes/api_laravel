<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesAssignedTable extends Migration
{
    public function up()
    {
        Schema::create('roles_assigned', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

        });
    }

    public function down()
    {
        Schema::dropIfExists('roles_assigned');
    }
}
