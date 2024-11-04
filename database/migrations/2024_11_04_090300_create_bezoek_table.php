<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBezoekTable extends Migration
{
    public function up()
    {
        Schema::create('bezoek', function (Blueprint $table) {
            $table->id('BezoekId');
            $table->foreignId('KlantId')->constrained('klant');
            $table->foreignId('MedewerkerId')->constrained('user');
            $table->foreignId('role_id')->constrained('rollen');
            $table->dateTime('Bezoekdatum');
            $table->string('Type');
            $table->string('Storingsdetails');
            $table->string('Adres');
            $table->string('GebruikteOnderdelen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bezoek');
    }
}
