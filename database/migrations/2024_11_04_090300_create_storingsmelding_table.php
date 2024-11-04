<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoringsmeldingTable extends Migration
{
    public function up()
    {
        Schema::create('storingsmelding', function (Blueprint $table) {
            $table->id('MeldingId');
            $table->foreignId('KlantId')->constrained('klant');
            $table->foreignId('MedewerkerId')->constrained('user');
            $table->dateTime('MeldingDatum');
            $table->string('Status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('storingsmelding');
    }
}
