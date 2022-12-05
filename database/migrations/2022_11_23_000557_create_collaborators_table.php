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
            $table->string('nodo')->nullable();

            $table->boolean('internet');
            $table->boolean('ip');
            $table->boolean('vpn');

            $table->boolean('account_gitlab');
            $table->boolean('account_glpi');
            $table->boolean('account_jira');

            $table->boolean('account_da');

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
