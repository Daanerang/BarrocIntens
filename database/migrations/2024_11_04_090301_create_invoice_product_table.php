<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceProductTable extends Migration
{
    public function up()
    {
        Schema::create('invoice_product', function (Blueprint $table) {
            $table->foreignId('InvoiceId')->constrained('invoices');
            $table->foreignId('ProductId')->constrained('products');
            $table->integer('Quantity');
            $table->string('Price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice_product');
    }
}
