<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitTable extends Migration
{
    public function up()
    {
        Schema::create('visit', function (Blueprint $table) {
            $table->id('VisitId');
            $table->foreignId('ClientId')->constrained('client');
            $table->foreignId('EmployeeId')->constrained('user');
            $table->foreignId('role_id')->constrained('role');
            $table->dateTime('VisitDate');
            $table->string('Type');
            $table->string('FaultDetails');
            $table->string('Adress');
            $table->string('UsedMaterials');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Visit');
    }
}
