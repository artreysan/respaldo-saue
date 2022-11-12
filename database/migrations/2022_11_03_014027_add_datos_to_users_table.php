<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();

            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->foreign('ticket_id')->references('id')->on('tickets');

            $table->unsignedBigInteger('petition_id')->nullable();
            $table->foreign('petition_id')->references('id')->on('petitions');

            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations');

            $table->unsignedBigInteger('enterprise_id')->nullable();
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('apellido_paterno');
            $table->dropColumn('apellido_materno');
            $table->dropColumn('ticket_id');
            $table->dropColumn('request_id');
            $table->dropColumn('location_id');
            $table->dropColumn('enterprise_id');

        });
    }
};
