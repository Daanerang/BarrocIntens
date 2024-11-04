<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProductTable extends Migration
{
    public function up()
    {
        Schema::create('invoice_product', function (Blueprint $table) {
            $table->id(); // Create a primary key for this table if needed
            $table->unsignedBigInteger('InvoiceId'); // Ensure this is unsignedBigInteger
            $table->unsignedBigInteger('ProductId'); // Ensure this is unsignedBigInteger
            $table->integer('Quantity');
            $table->decimal('Price', 10, 2); // Use decimal for monetary values
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('InvoiceId')->references('InvoiceId')->on('invoices')->onDelete('cascade');
            $table->foreign('ProductId')->references('ProductId')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice_product');
    }
}