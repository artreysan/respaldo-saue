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
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();
            $table->char('nombre', 150);
            $table->char('apellido_paterno', 150);
            $table->char('apellido_materno', 150)->nullable();
            $table->string('email')->unique();
            $table->char('internet',40)->nullable();
            $table->ipAddress('ip_fija')->nullable();
            $table->ipAddress('vpn')->nullable();
            $table->char('cuenta_gitlab', 50)->nullable();
            $table->char('cuenta_jira', 50)->nullable();
            $table->char('cuenta_glpi', 50)->nullable();
            $table->char('cuenta_da', 50)->nullable();

            //Llaves foraneas
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')
                  ->references('id')
                  ->on('locations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rols');

            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')
                  ->references('id')
                  ->on('equipment')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('enterprise_id');
            $table->foreign('enterprise_id')
                  ->references('id')
                  ->on('enterprises');

            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id')
                  ->references('id')
                  ->on('accounts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborators');
    }
};
