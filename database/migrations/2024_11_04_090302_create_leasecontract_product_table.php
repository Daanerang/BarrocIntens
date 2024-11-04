<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseContractProductTable extends Migration
{
    public function up()
    {
        Schema::create('lease_contract_product', function (Blueprint $table) {
            $table->foreignId('LeaseContractId')->constrained('lease_contracts');
            $table->foreignId('ProductId')->constrained('products');
            $table->integer('Quantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lease_contract_product');
    }
}
