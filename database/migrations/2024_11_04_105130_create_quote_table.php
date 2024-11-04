<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteTable extends Migration
{
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id('QuoteId');
            $table->foreignId('CustomerId')->constrained('customers', 'CustomerId'); // Specify primary key column
            $table->foreignId('EmployeeId')->constrained('users'); // Assuming 'id' is primary key in 'users'
            $table->string('Status');
            $table->dateTime('QuoteDate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}