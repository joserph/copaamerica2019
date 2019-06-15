<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('flag');
            $table->integer('points');
            $table->integer('matches');
            $table->integer('success');
            $table->integer('draws');
            $table->integer('defeats');
            $table->integer('goals_in_favor');
            $table->integer('goals_against');
            $table->string('difference');

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
        Schema::dropIfExists('countries');
    }
}
