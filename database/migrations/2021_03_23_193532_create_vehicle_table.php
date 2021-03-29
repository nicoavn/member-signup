<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_color');
            $table->timestamp('agreed_accept_terms');
            $table->string('plate_number');
            $table->string('vin');
            $table->string('diamond');
            $table->string('base_number_base');
            $table->string('tablet_no');
            $table->timestamp('agreed_accept_terms');
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
        Schema::dropIfExists('vehicles');
    }
}
