<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasecontractTable extends Migration
{
    public function up()
    {
        Schema::create('leasecontract', function (Blueprint $table) {
            $table->id('LeasecontractId');
            $table->foreignId('KlantId')->constrained('klant');
            $table->foreignId('MedewerkerId')->constrained('user');
            $table->dateTime('Startdatum');
            $table->dateTime('Einddatum');
            $table->string('Betalingsoptie');
            $table->integer('Aantalmachines');
            $table->string('Opzegtermijn');
            $table->string('Status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leasecontract');
    }
}
