<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartTable extends Migration
{
    public function up()
    {
        Schema::create('part', function (Blueprint $table) {
            $table->id('PartId');
            $table->string('Name');
            $table->integer('Stock');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('part');
    }
}
