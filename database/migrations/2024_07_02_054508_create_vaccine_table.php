<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineTable extends Migration
{
    public function up()
    {
        Schema::create('vaccine', function (Blueprint $table) {
            $table->id();
            $table->string('vaccine');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaccine');
    }
}

