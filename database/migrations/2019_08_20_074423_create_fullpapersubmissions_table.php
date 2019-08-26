<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullpapersubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fullpapersubmissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullpaper_ref');
            $table->string('leadauthor');
            $table->string('email');
            $table->text('coauthors')->nullable();
            $table->string('phone')->nullable();
            $table->integer('country_id');
            $table->text('papertitle');
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
        Schema::dropIfExists('fullpapersubmissions');
    }
}
