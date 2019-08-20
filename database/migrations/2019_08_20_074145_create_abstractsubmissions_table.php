<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbstractsubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abstractsubmissions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('papertitle');
            $table->text('leadauthor');
            $table->text('coauthor');
            $table->text('email');
            $table->integer('country_id');
            $table->text('paperabstract');
            $table->text('filename');
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
        Schema::dropIfExists('abstractsubmissions');
    }
}
