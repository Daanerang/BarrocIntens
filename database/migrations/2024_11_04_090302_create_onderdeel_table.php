<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnderdeelTable extends Migration
{
    public function up()
    {
        Schema::create('onderdeel', function (Blueprint $table) {
            $table->id('OnderdeelId');
            $table->string('Naam');
            $table->integer('Voorraad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('onderdeel');
    }
}
