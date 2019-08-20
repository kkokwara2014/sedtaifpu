<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confregistrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('natureofparti');
            $table->text('nameofparti');
            $table->text('gender');
            $table->text('designation');
            $table->text('department');
            $table->text('organization');
            $table->text('address');
            $table->integer('country_id');
            $table->string('phone');
            $table->string('email');
            $table->text('papertitle');
            $table->string('participation');
            $table->string('presentationmode');
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
        Schema::dropIfExists('confregistrations');
    }
}