<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeasecontractProductTable extends Migration
{
    public function up()
    {
        Schema::create('leasecontract_product', function (Blueprint $table) {
            $table->foreignId('LeasecontractId')->constrained('leasecontract');
            $table->foreignId('ProductId')->constrained('product');
            $table->integer('Aantal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leasecontract_product');
    }
}
