<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('drug_name');
            $table->string('brand_name');
            $table->string('disease');
            $table->string('ccr60more');
            $table->string('ccr50to60');
            $table->string('ccr40to50');
            $table->string('ccr30to40');
            $table->string('ccr20to30');
            $table->string('ccr10to20');
            $table->string('ccr10less');
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
        Schema::dropIfExists('drug');
    }
}
