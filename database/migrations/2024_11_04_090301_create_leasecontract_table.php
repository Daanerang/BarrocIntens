<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaseContractTable extends Migration
{
    public function up()
    {
        Schema::create('lease_contracts', function (Blueprint $table) {
            $table->id('LeaseContractId');
            $table->foreignId('ClientId')->constrained('clients');
            $table->foreignId('EmployeeId')->constrained('users');
            $table->dateTime('StartDate');
            $table->dateTime('EndDate');
            $table->string('PaymentOption');
            $table->integer('MachineCount');
            $table->string('CancellationPeriod');
            $table->string('Status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lease_contracts');
    }
}
