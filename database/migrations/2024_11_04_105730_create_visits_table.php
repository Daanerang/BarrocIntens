<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id('VisitId');
            $table->unsignedBigInteger('CustomerId'); // Ensuring unsignedBigInteger to match customers.CustomerId
            $table->unsignedBigInteger('EmployeeId');
            $table->unsignedBigInteger('RoleId');
            $table->dateTime('VisitDate');
            $table->string('Type');
            $table->string('FaultDetails');
            $table->string('Address');
            $table->string('UsedMaterials');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('CustomerId')->references('CustomerId')->on('customers')->onDelete('cascade');
            $table->foreign('EmployeeId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('RoleId')->references('RolId')->on('roles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('visits');
    }
}