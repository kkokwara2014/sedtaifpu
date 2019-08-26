<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tasktitle');
            $table->text('namewithtitle');
            $table->text('designation')->nullable();
            $table->text('portfolio')->nullable();
            $table->text('organization')->nullable();
            $table->string('scheduledate')->nullable();
            $table->string('scheduletime')->nullable();
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
        Schema::dropIfExists('progschedules');
    }
}
