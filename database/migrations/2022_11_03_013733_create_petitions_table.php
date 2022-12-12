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
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();

            $table->char('internet',40)->nullable();
            $table->ipAddress('ip_fija')->nullable();
            $table->ipAddress('vpn')->nullable();
            $table->char('cuenta_gitlab', 50)->nullable();
            $table->char('cuenta_jira', 50)->nullable();
            $table->char('cuenta_glpi', 50)->nullable();
            $table->char('cuenta_da', 50)->nullable();
            $table->char('tipo', 20)->nullable();
            $table->char('marca', 20)->nullable();
            $table->char('modelo', 20)->nullable();
            $table->ipAddress('serie', 20)->nullable();
            $table->macAddress('mac_ethernet', 20)->nullable();
            $table->macAddress('mac_wifi')->nullable();
            $table->char('propietario', 50)->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')->references('id')->on('equipment');

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')->references('id')->on('collaborators')->nullable();

            $table->unsignedBigInteger('authorizer_id')->nullable();
            $table->foreign('authorizer_id')->references('id')->on('authorizers');

            $table->string('fileID')->nullable()->unique();

            $table->unsignedInteger('startTime')->nullable();
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
        Schema::dropIfExists('petitions');

    }
};

