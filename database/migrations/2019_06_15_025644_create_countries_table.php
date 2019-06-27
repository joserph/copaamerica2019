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
            $table->integer('points')->nullable();
            $table->integer('matches')->nullable();
            $table->integer('success')->nullable();
            $table->integer('draws')->nullable();
            $table->integer('defeats')->nullable();
            $table->integer('goals_in_favor')->nullable();
            $table->integer('goals_against')->nullable();
            $table->string('difference')->nullable();

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
