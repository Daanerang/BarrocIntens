<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuurTable extends Migration
{
    public function up()
    {
        Schema::create('factuur', function (Blueprint $table) {
            $table->id('FactuurId');
            $table->foreignId('KlantId')->constrained('klant');
            $table->foreignId('MedewerkerId')->constrained('user');
            $table->dateTime('FactuurDatum');
            $table->string('Bedrag');
            $table->boolean('IsBetaald');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factuur');
    }
}
