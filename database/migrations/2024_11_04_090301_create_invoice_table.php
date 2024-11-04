<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('InvoiceId');
            $table->foreignId('ClientId')->constrained('clients');
            $table->foreignId('EmployeeId')->constrained('users');
            $table->dateTime('InvoiceDate');
            $table->string('Amount');
            $table->boolean('IsPaid');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
