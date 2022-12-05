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

            $table->boolean('account_gitlab');
            $table->boolean('account_jira');
            $table->boolean('account_glpi');
            $table->boolean('account_da');

            $table->boolean('internet');
            $table->boolean('vpn');
            $table->boolean('ip');
            $table->boolean('nodo');

            $table->char('tk_glpi_account_1', 30)->nullable();
            $table->char('tk_gitlab_account_1', 30)->nullable();
            $table->char('tk_jira_account_1', 30)->nullable();
            $table->char('tk_da_account_1', 30)->nullable();

            $table->char('tk_glpi_account_0', 30)->nullable();
            $table->char('tk_gitlab_account_0', 30)->nullable();
            $table->char('tk_jira_account_0', 30)->nullable();
            $table->char('tk_da_account_0', 30)->nullable();

            $table->char('tk_nodo_1', 30)->nullable();
            $table->char('tk_internet_1', 30)->nullable();
            $table->char('tk_ip_1', 30)->nullable();
            $table->char('tk_vpn_1', 30)->nullable();

            $table->char('tk_nodo_0', 30)->nullable();
            $table->char('tk_internet_0', 30)->nullable();
            $table->char('tk_ip_0', 30)->nullable();
            $table->char('tk_vpn_0', 30)->nullable();

            $table->boolean('access_project')->nullable();

            $table->char('status', 1);

            $table->char('project1', 100)->nullable();
            $table->char('project2', 100)->nullable();
            $table->char('project3', 100)->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->unsignedBigInteger('equipment_id')->nullable();
            $table->foreign('equipment_id')->references('id')->on('equipment');

            $table->unsignedBigInteger('collaborator_id');
            $table->foreign('collaborator_id')
                ->references('id')
                ->on('collaborators');

            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id')
                ->references('id')
                ->on('accounts');

            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')
                ->references('id')
                ->on('services');

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

