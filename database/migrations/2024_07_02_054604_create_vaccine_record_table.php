<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineRecordTable extends Migration
{
    public function up()
    {
        Schema::create('vaccine_record', function (Blueprint $table) {
            $table->id();
            $table->foreignId('std_id')->constrained('student');
            $table->foreignId('vac_id')->constrained('vaccine');
            $table->date('vaccined_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaccine_record');
    }
}

