<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuurProductTable extends Migration
{
    public function up()
    {
        Schema::create('factuur_product', function (Blueprint $table) {
            $table->foreignId('FactuurId')->constrained('factuur');
            $table->foreignId('ProductId')->constrained('product');
            $table->integer('Aantal');
            $table->string('Prijs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factuur_product');
    }
}
