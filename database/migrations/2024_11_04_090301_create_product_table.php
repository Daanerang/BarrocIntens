<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('ProductId');
            $table->string('Naam');
            $table->string('Beschrijving');
            $table->integer('Voorraad');
            $table->string('Prijs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product');
    }
}