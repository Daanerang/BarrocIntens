<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CustomerId'); // This creates an unsigned BIGINT primary key by default
            $table->string('CompanyName');
            $table->string('ContactPerson');
            $table->string('PhoneNumber');
            $table->string('Address');
            $table->string('Email');
            $table->boolean('BKRCheckStatus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}