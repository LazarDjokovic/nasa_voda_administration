<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterCoolersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_coolers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_water_cooler_price')->unsigned();
            $table->integer('id_client')->unsigned();
            $table->string('name');
            $table->integer('active');
            $table->foreign('id_water_cooler_price')->references('id')->on('water_cooler_prices');
            $table->foreign('id_client')->references('id')->on('clients');
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
        Schema::dropIfExists('water_coolers');
    }
}
