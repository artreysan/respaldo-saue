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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->char('tk_glpi_cuenta', 30)->nullable();
            $table->char('tk_glpi_acceso', 30)->nullable();
            $table->char('tk_glpi_vpn', 30)->nullable();
            $table->char('tk_da_alta', 30)->nullable();
            $table->char('tk_da_baja', 30)->nullable();
            $table->char('tk_ip', 30)->nullable();
            $table->char('tk_proyecto_jira', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
