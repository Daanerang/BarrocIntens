<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferteTable extends Migration
{
    public function up()
    {
        Schema::create('offerte', function (Blueprint $table) {
            $table->id('OfferteId');
            $table->foreignId('KlantId')->constrained('klant');
            $table->foreignId('MedewerkerId')->constrained('user');
            $table->string('Status');
            $table->dateTime('Offertedatum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offerte');
    }
}
