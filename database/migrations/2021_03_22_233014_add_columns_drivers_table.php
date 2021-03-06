<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->dropColumn('contact_phone');
            $table->dropColumn('contact_email');
            $table->dropColumn('emergency_contact_name');
            $table->dropColumn('emergency_contact_phone');
        });
    }
}
