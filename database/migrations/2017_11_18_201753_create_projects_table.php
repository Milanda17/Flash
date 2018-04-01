<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('Pid');
            $table->string('project_name');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('manager_email');
            $table->string('employee_email1');
            $table->string('employee_email2');
            $table->string('employee_email3');
            $table->string('employee_email4');
            $table->string('employee_email5');
            $table->string('discription');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
