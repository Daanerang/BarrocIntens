<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id('ClientId');
            $table->string('CompanyName');
            $table->string('ContactPerson');
            $table->string('PhoneNumber');
            $table->string('Adress');
            $table->string('Email');
            $table->boolean('BKRCheckStatus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client');
    }
}

