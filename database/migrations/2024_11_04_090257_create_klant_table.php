<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlantTable extends Migration
{
    public function up()
    {
        Schema::create('klant', function (Blueprint $table) {
            $table->id('klantId');
            $table->string('Bedrijfsnaam');
            $table->string('Contactpersoon');
            $table->string('Telefoonnummer');
            $table->string('Adres');
            $table->string('Email');
            $table->boolean('BKRCheckStatus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('klant');
    }
}

