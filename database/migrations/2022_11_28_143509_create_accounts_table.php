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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->char('account_gitlab', 50)->nullable();
            $table->char('account_jira', 50)->nullable();
            $table->char('account_glpi', 50)->nullable();
            $table->char('account_da', 50)->nullable();

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')
                  ->references('id')
                  ->on('collaborators');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
