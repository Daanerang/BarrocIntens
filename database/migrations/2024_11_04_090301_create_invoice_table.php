<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('InvoiceId'); // Creates an unsigned big integer for the primary key
            $table->foreignId('CustomerId')->constrained('customers', 'CustomerId'); // Specify primary key column
            $table->unsignedBigInteger('EmployeeId'); // Ensure this is unsignedBigInteger
            $table->dateTime('InvoiceDate'); // Date and time of the invoice
            $table->decimal('Amount', 10, 2); // Using decimal for monetary values
            $table->boolean('IsPaid')->default(false); // Default value for IsPaid
            $table->timestamps(); // Creates created_at and updated_at fields

            // Define foreign key constraints
            $table->foreign('CustomerId')->references('CustomerId')->on('customers')->onDelete('cascade');
            $table->foreign('EmployeeId')->references('EmployeeId')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}