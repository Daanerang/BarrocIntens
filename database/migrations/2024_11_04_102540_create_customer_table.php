<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('CustomerId');
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
        Schema::dropIfExists('customer');
    }
}

