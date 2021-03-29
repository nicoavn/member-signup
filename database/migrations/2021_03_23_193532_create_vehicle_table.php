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
            $table->string('make');
            $table->string('model');
            $table->string('color');
            $table->integer('year');
            $table->string('plate_number');
            $table->string('vin');
            $table->string('diamond');
            $table->string('base_number_name');
            $table->string('tablet_no');
            $table->boolean('insurance_certificate_provided');
            $table->boolean('nys_registration');
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
