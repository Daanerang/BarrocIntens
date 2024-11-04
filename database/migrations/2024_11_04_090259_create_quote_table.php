<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteTable extends Migration
{
    public function up()
    {
        Schema::create('Quote', function (Blueprint $table) {
            $table->id('QuoteId');
            $table->foreignId('ClientId')->constrained('client');
            $table->foreignId('EmployeeId')->constrained('user');
            $table->string('Status');
            $table->dateTime('QuoteDate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quote');
    }
}
