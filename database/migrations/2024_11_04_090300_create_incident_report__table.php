<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentReportTable extends Migration
{
    public function up()
    {
        Schema::create('incident_reports', function (Blueprint $table) {
            $table->id('ReportId');
            $table->foreignId('ClientId')->constrained('clients');
            $table->foreignId('EmployeeId')->constrained('users');
            $table->dateTime('ReportDate');
            $table->string('Status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('incident_reports');
    }
}
