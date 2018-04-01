<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('Mid');
            $table->string('sender');
            $table->string('recever');
            $table->string('subject');
            $table->string('description');
            $table->string('project_name');
            $table->string('sent');
            $table->string('read');
            $table->string('forwardToManager');
            $table->string('forwardToEmployee');
            $table->string('attachment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
