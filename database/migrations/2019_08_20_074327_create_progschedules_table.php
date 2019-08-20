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
            $table->text('designation');
            $table->text('portfolio');
            $table->text('organization');
            $table->string('scheduledate');
            $table->string('scheduletime');
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
