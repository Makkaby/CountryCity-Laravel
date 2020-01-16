<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->string('continent');
            $table->string('region');
            $table->integer('surfacearea');
            $table->integer('indepyear');
            $table->integer('population');
            $table->double('lifeexpectancy');
            $table->integer('gnp');
            $table->integer('gnpold');
            $table->string('localname');
            $table->string('governmentform');
            $table->string('headofstate');
            $table->integer('capital');
            $table->string('code2');
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
