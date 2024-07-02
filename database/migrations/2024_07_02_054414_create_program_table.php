<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->string('program_th');
            $table->string('program_en');
            $table->integer('grad_year');
            $table->foreignId('prg_fac_id')->constrained('faculty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program');
    }
}

