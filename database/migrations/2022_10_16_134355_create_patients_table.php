<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sex');
            $table->string('disease');
            $table->string('age');
            $table->string('height');
            $table->string('weight');
            $table->string('wbc');
            $table->string('hb');
            $table->string('plt');
            $table->string('ast');
            $table->string('alt');
            $table->string('tbil');
            $table->string('dbil');
            $table->string('gtp');
            $table->string('scr');
            $table->string('egfr');
            $table->string('crp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
