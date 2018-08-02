<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterCoolerFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_cooler_filters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_water_cooler')->unsigned();
            $table->integer('id_filter')->unsigned();
            $table->foreign('id_water_cooler')->references('id')->on('water_coolers');
            $table->foreign('id_filter')->references('id')->on('filters');
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('water_cooler_filters');
    }
}
