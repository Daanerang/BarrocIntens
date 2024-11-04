<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleTable extends Migration
{
    public function up()
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id('RolId');
            $table->string('Naam');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('role');
    }
}
